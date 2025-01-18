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
        return view('back.pages.user.home', $data);
    }

    public function uSearch(Request $request)
    {
        $data = [
            'pageTitle' => 'Search Page',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.user.search', $data);
    }

    public function notFound() {
        $data = [
            'pageTitle' => "You're Lost",
        ];
        return view('back.pages.404.404', $data );
    }
}
