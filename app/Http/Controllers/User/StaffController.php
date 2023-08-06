<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        $staff = User::with('roles')->role(['secretary', 'admin', 'rider'])->get();  

        return view('user.staff.index', compact('staff'));
    }

    public function show(User $staff)
    {
        $roles =  Role::pluck('name');

        $order_id = OrderStatus::where('user_id', $staff->id)->pluck('id');

        $orders = Order::whereIn('id', $order_id)->select(['id', 'order_id', 'created_at'])->paginate(10);

        return view('user.staff.show', compact('staff', 'roles', 'orders'));
    }
}
