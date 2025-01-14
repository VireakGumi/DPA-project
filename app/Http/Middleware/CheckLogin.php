<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $req,Closure $next): Response
    {
        $token = session('token');
        $user = User::whereHas('tokens', function($query) use ($token) {
            $query->where('id', $token); // Adjust as necessary based on how you're storing tokens
        })->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to login.');
        }
        return $next($req);
    }
}
