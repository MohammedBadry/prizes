<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\WinnersExport;
use Maatwebsite\Excel\Facades\Excel;

class Users extends Controller {

	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
	    $searchText = request()->search_text;
		$users = User::where('type', 'user')
        ->when($searchText, function($query) use ($searchText) {
            $query->where('name', 'LIKE', '%'.$searchText.'%');
            $query->orWhere('mobile', 'LIKE', '%'.$searchText.'%');
            $query->orWhere('code', 'LIKE', '%'.$searchText.'%');
        })
        ->paginate()
        ->withQueryString();
		return view('admin.users.index', ['title' => 'المستخدمين', 'users' => $users]);
	}

	public function winners() {
	    $searchText = request()->search_text;
		$users = User::where(['type' => 'user', 'is_winner' => 1])
        ->when($searchText, function($query) use ($searchText) {
            $query->where('name', 'LIKE', '%'.$searchText.'%');
            $query->orWhere('mobile', 'LIKE', '%'.$searchText.'%');
            $query->orWhere('code', 'LIKE', '%'.$searchText.'%');
        })
        ->orderBy('win_date', 'desc')
        ->paginate()
        ->withQueryString();
		return view('admin.winners.index', ['title' => 'الفائزين', 'users' => $users]);
	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.users.create', ['title' => 'إضافة']);
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response Or Redirect
	 */
	public function store(UsersRequest $request) {
		$data = $request->except("_token", "_method");
		if (request()->hasFile('photo_profile')) {
			$data['photo_profile'] = it()->upload('photo_profile', 'users');
		} else {
			$data['photo_profile'] = "";
		}

		$data['password'] = bcrypt(request('password'));

		User::create($data);

		return redirectWithSuccess(url('/users'), trans('admin.added'));
	}

	/**
	 * Display the specified resource.
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$users = User::find($id);
		return is_null($users) || empty($users) ?
		backWithError(trans("admin.undefinedRecord")) :
		view('admin.users.show', [
			'title' => trans('admin.show'),
			'admins' => $users,
		]);
	}

	/**
	 * edit the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$users = User::find($id);
		return is_null($users) || empty($users) ?
		backWithError(trans("admin.undefinedRecord")) :
		view('admin.users.edit', [
			'title' => trans('admin.edit'),
			'admins' => $users,
		]);
	}

    public function import(Request $request)
    {
        if ($file = $request->file('excel_file')) {
           $validator=validator()->make($request->all(),[
             'excel_file'=>'required|max:50000|mimes:xlsx,application/csv,application/excel,
              application/vnd.ms-excel, application/vnd.msexcel,
              text/csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
           ]);
          if ($validator->fails()) {
             return back()
                    ->with('error', 'هذا الملف غير مسموح به');
           }
           $import = \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\UsersImport, $request->file('excel_file'));

            return redirectWithSuccess(url('users'), 'جاري الاستيراد يرجى الانتظار قليلا');
        } else {
            return redirect()->back()->with('error', 'خطأ في الملف المرفوع!');
        }
    }

    public function winnersExport()
    {
        return Excel::download(new WinnersExport(), 'winners_'.date('Y-m-d').'.xlsx');
    }
	/**
	 * update a newly created resource in storage.
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function updateFillableColumns() {
		$fillableCols = [];
		foreach (array_keys((new UsersRequest)->attributes()) as $fillableUpdate) {
			if (!is_null(request($fillableUpdate))) {
				$fillableCols[$fillableUpdate] = request($fillableUpdate);
			}
		}
		return $fillableCols;
	}

	public function update(UsersRequest $request, $id) {
		// Check Record Exists

		$users = User::find($id);
		if (is_null($users) || empty($users)) {
			return backWithError(trans("admin.undefinedRecord"));
		}
		$data = $this->updateFillableColumns();

		if (!empty(request('password'))) {
			$data['password'] = bcrypt(request('password'));
		}

		if (request()->hasFile('photo_profile')) {
			it()->delete($users->photo_profile);
			$data['photo_profile'] = it()->upload('photo_profile', 'users');
		}
		User::where('id', $id)->update($data);
		return redirectWithSuccess(url('/users'), trans('admin.updated'));
	}

	/**
	 * destroy a newly created resource in storage.
	 * @param  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$users = User::find($id);
		if (is_null($users) || empty($users)) {
			return backWithError(trans('admin.undefinedRecord'));
		}
		$users->delete();

		return backWithSuccess(trans('admin.deleted'));

	}
}
