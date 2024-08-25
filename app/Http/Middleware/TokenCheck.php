<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class TokenCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
{
    $token = $request->header('Authorization');
    if (!$token) {
        return response()->json(['status' => false, 'message' => 'Authorization token not provided.','code'=>401], 401); // Unauthorized
    }
    if (!Auth::guard('users')->check()) {
            return response()->json(['status' => false, 'message' => 'Authentication failed.','code'=>401], 401); // Unauthorized
    }
    return $next($request);
}




}
