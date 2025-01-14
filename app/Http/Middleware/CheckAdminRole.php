<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($req, Closure $next, ...$guards)
    {
        $token = session('token');
        $user = User::whereHas('tokens', function($query) use ($token) {
            $query->where('id', $token); // Adjust as necessary based on how you're storing tokens
        })->first();

        // Check if user is authenticated
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to login.');
        }

        // Check user role
        $userRole = $user->roles[0]->id ?? null; // Use null coalescing to avoid errors
        if ($userRole == Role::ROLE_ADMIN) {
            return $next($req);
        }
    
        return redirect()->route('login')->with('error', 'You are not authorized to perform this action.');
    }
}
