<?php

namespace App\Http\Controllers\User;

use App\Models\User;
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

        return view('user.staff.show', compact('staff', 'roles'));
    }
}
