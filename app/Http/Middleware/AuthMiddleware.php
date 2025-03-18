<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Please log in to access this page.');
    }
}
