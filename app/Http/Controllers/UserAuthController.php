<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
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

}
