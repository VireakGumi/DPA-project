<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome(Request $request)
    {
        $data = [
            'pageTitle' => 'Home Page',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.user.Home', $data);
    }

    public function uSearch(Request $request)
    {
        $data = [
            'pageTitle' => 'Search Page',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.user.Search', $data);
    }

    public function uProfile(Request $request)
    {
        $data = [
            'pageTitle' => 'Profile Page',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.user.Profile', $data);
    }



    public function notFound() {
        $data = [
            'pageTitle' => "You're Lost",
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.404.404', $data );
    }
}
