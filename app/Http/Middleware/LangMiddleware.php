<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;

class LangMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('api/*')) {
            $acceptLanguage = $request->header('Accept-Language');
            if ($acceptLanguage) {
                if (str_contains($acceptLanguage, 'ar')) {
                    session()->put('lang', 'ar');
                } elseif (str_contains($acceptLanguage, 'en')) {
                    session()->put('lang', 'en');
                }
            }
            app()->setLocale(session('lang', lang()));
        }else{
            app()->setLocale(session('lang', lang()));

        }
        return $next($request);
    }

}
