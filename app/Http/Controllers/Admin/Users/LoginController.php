<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng nhâp hệ thống ',
        ]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin');
        }
        Session::flash('error', 'Email hoặc mật khẩu không chính xác');
        return redirect()->back();
    }
}
