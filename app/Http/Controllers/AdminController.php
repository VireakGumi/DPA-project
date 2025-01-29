<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function adminPostOverview(Request $request)
    {
        $data = [
            'pageTitle' => 'Post Overview',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.post-overview', $data);
    }

    public function adminPostView(Request $request)
    {
        $data = [
            'pageTitle' => 'Post',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.post', $data);
    }

    public function adminDashboard(Request $request)
    {
        $data = [
            'pageTitle' => 'Dashboard',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.dashboard', $data);
    }

    public function adminProfileEdit(Request $request)
    {
        $data = [
            'pageTitle' => 'Profile Edit',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.profile-edit', $data);
    }

}
