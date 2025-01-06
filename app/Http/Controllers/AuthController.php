<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(Request $request)
    {
        $data = [
            'pageTitle' => 'Login',
        ];
        return view('back.pages.auth.login', $data);
    }

    public function forgetForm(Request $request)
    {
        $data = [
            'pageTitle' => 'Forgot Password',
        ];
        return view('back.pages.auth.forget', $data);
    }

    public function loginHandler(Request $request)
    {

        return redirect()->route('admin.dashboard');

    }




}
