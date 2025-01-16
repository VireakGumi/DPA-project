<?php

use App\Models\Role;
use App\Models\User;

if (! function_exists('store_session_key')) {
    function store_session_key($data)
    {
        session([
            'token'         => $data->token,
            'user_id'       => $data->user_id,
            'email'         => $data->email,
            'display_name'  => $data->name,
            'role'          => $data->role,
        ]);
    }
}

if (! function_exists('destroy_session_key')) { 
    function destroy_session_key()
    {
        session()->flush();
        session()->regenerate();
    }
}
if (!function_exists('get_session_key')) {
    function get_session_key($key)
    {
        return session()->get($key);
    }
}

if (! function_exists('check_admin_role')) { 
    function check_admin_role($user) {
        $route = 'admin.dashboard';
        if($user->roles[0]->id != Role::ROLE_ADMIN) {
            $route = 'u.home';
        }
        return $route;
    }
}

// if (!function_exists('check_is_login')) {
//     function check_is_login() {
//         $token = get_session_key('token');
//         $user = User::whereHas('tokens', function($query) use ($token) {$query->where('id', $token); })->first(['id']);
//         $data = [
//             'is_login' => $user ? true : false,
//             'route' => redirect()->route( check_admin_role($user))
            
//         ];
//         return $data;
//     }
// }
?>