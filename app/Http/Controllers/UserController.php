<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\loginRequest;
use App\Http\Resources\User\AuthResource;
use App\Models\User;
use App\Models\UserDevice;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Facades\Agent;

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
