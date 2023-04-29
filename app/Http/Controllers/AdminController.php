<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/logout/page');
        //return redirect()->route('admin.logout');
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    public function AdminLogoutPage()
    {
        return view('admin.admin_logout');
    }

    public function AdminProfile()
    {
        $get_id = Auth::user()->id;
        $admin_data = User::find($get_id);
        return view('admin.admin_profile_view', compact('admin_data'));
    }
}
