<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Events\OrderNotification;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Category;
use App\Models\VendorCategory;
use App\Models\Order;
use App\Models\User;

class Dashboard extends Controller {

	public function home() {
        $data['users'] = User::where(['type' => 'user'])->get()->count();
        $data['winners'] = User::where(['type' => 'user', 'is_winner' => 1])->get()->count();

        return view('admin.home', [
            'title' => trans('admin.dashboard'),
            'data' => $data,
        ]);
	}
}
