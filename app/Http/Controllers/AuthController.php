<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\loginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\UserDevice;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;
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
        store_session_key(User::AuthResourceObj($user->id, $token->plainTextToken));
        $route = check_admin_role($user);
        return redirect()->route($route)->with('message', 'User login successfully.');
    }

    // logout route
    public function logout(Request $req)
    {
        $token = $req->session()->get('token');
        
        $user = User::whereHas('tokens', function ($query) use ($token) {
            $query->where('id', $token);
        })->first(['id']);

        if ($user) $user->tokens()->where('id', $token)->delete();
        
        destroy_session_key();
        return redirect()->route('login')->with('message', 'User logged out successfully.');
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

        return view('back.pages.auth.Register', $data);
    }

    public function RegisterHandler(RegisterRequest $req)
    {
        $user = new User($req->only(['email', 'password']));
        $user->full_name = $req->full_name;
        $user->username = strtolower(str_replace(' ', '', $req->full_name));
        $user->status = User::STATUS_IS_ACTIVE;
        $user->picture = User::DEFAULT_AVATAR;
        $user->email_verified_at = Carbon::now();
        $user->save();
        $user->roles()->sync([Role::ROLE_USER]);

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
        store_session_key(User::AuthResourceObj($user->id, $token->plainTextToken));
        return redirect()->route('u.home')->with('message', 'User Register successfully.');
    }
}
