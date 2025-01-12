<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userLoginForm(Request $request)
    {
        $data = [
            'pageTitle' => 'User Login',
        ];

        return view('back.pages.user.auth.login', $data);
    }

    public function userRegisterForm(Request $request)
    {
        $data = [
            'pageTitle' => 'User Register',
        ];

        return view('back.pages.user.auth.register', $data);
    }

    public function userForgetForm(Request $request)
    {
        $data = [
            'pageTitle' => 'User Forgot Password',
        ];
        return view('back.pages.user.auth.forget', $data);
    }

    public function userHome(Request $request)
    {
        $data = [
            'pageTitle' => 'Home Page',
        ];
        return view('back.pages.user.home', $data);
    }
}
