<?php 

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
?>