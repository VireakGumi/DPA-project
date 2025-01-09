<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome(Request $request)
    {
        $data = [
            'pageTitle' => 'Home Page',
        ];
        return view('back.pages.dashboard', $data);
    }
}
