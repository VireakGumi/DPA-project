<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(Request $request)
    {
        $data = [
            'pageTitle' => 'Dashboard',
            'user_profile' => new UserResource(User::GetUserProfile()),
        ];
        return view('back.pages.dashboard', $data);
    }
}
