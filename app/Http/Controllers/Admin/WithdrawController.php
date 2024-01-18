<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;

class WithdrawController extends Controller {

	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$users = User::where('type', 'user')->paginate();
        $settings = Setting::first();
		return view('frontend.withdraw.index', ['title' => 'المستخدمين', 'users' => $users, 'time' => $settings->time]);
	}

	public function checkWinner() {
		$winner = User::where(['type' => 'user', 'is_winner' => 0])->inRandomOrder()->first();
		echo $winner->mobile ?? 0;
	}

	public function getWinner($mobile) {
		$winner = User::where(['type' => 'user', 'is_winner' => 0])->where('mobile', $mobile)->first();
        $winner->is_winner = 1;
        $winner->win_date = date('Y-m-d H:i:s');
        $winner->save();

        echo $winner->name;
    }

	public function updateTimeSeetings($time) {
        if($time>12) {
            echo "يجب ألا يزيد الوقت عن 120 ثانية";
        }
        $settings = Setting::first();
        $settings->time = $time;
        $settings->save();

        echo "تم تحديث الإعدادات";
    }
}
