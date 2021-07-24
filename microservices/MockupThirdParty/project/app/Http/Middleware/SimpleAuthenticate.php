<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SimpleAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return ($request->input('api_token') == "ViCyzlhQbelxAbjKu9exg==") ? $next($request) : response("Unauthorized!", 401);
    }
}
