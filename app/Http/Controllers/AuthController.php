<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\loginRequest;
use App\Http\Resources\User\AuthResource;
use App\Models\Role;
use App\Models\User;
use App\Models\UserDevice;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Facades\Agent;

class AuthController extends Controller
{
    // login route
    public function LoginHandler(loginRequest $req)
    {
        $user = User::where('email', $req->input('email'))->first(['id', 'email', 'password', 'status']);
        if (!$user) return redirect()->route('login')->with('error', 'Incorrect email or password.');
        if (!Hash::check($req->input('password'), $user->password)) return redirect()->route('login')->with('error', 'Incorrect email or password.');
        if ($user->status != User::STATUS_IS_ACTIVE) return redirect()->route('login')->with('error', 'This user is not active. Please contact support if you believe this is an error.');
        $token       = $user->createToken($user->id);
        $user->token = $token->plainTextToken;
        $ip          = $req->ip();
        $location    = Location::get($ip);
        $deviceType  = UserDevice::DEVICE_TYPE_UNKNOWN;
        if (Agent::isDesktop()) {
            $deviceType = UserDevice::DEVICE_TYPE_BROWSER;
        } else if (Agent::isMobile()) {
            $deviceType = UserDevice::DEVICE_TYPE_MOBILE;
        }
        $userDevice  = new UserDevice([
            'token_id'    => $token->accessToken->id,
            'device_id'   => $req->input('device_id'),
            'device_name' => Agent::device(),
            'os'          => Agent::platform(),
            'ip'          => $ip,
            'browser'     => Agent::browser(),
            'location'    => $location ? $location->cityName . " . " .  $location->countryName : null,
            'device_type' => $deviceType
        ]);
        $userDevice->user_id = $user->id;
        $userDevice->save();
        $route = 'admin.dashboard';
        if($user->roles[0]->id != Role::ROLE_ADMIN) {
            $route = 'u.home';
        }
        store_session_key(User::AuthResourceObj($user->id, $token->plainTextToken));
        return redirect()->route($route)->with('message', 'User login successfully.');
    }

    // logout route
    public function logout(Request $req)
    {
        $req->user('sanctum')->currentAccessToken()->delete();
        destroy_session_key();
        return redirect()->route('admin.login')->with('message', 'User logged out successfully.');
    }
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
    public function RegisterForm(Request $request)
    {
        $data = [
            'pageTitle' => 'User Register',
        ];

        return view('back.pages.auth.register', $data);
    }

}
