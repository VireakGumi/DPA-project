<?php
namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $token = $request->session()->get('token');
        if ($token) {
            $user = User::whereHas('tokens', function($query) use ($token) {$query->where('id', $token); })->first(['id']);
            return redirect()->route(check_admin_role($user));
        }
        return $next($request);
    }
}
