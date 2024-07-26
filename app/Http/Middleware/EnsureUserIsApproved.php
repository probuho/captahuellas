<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsApproved
{
    // public function handle(Request $request, Closure $next)
    // {
        // if (auth()->check() && !auth()->user()->approved) {
            // auth()->logout();
            // return redirect('/login')->with('status', 'Su cuenta no está aprobada.');
        // }
// 
        // return $next($request);
    // }
}
