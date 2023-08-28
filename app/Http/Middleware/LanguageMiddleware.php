<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('applocale') && array_key_exists(Session::get('applocale'), config('languages'))) {
            App::setLocale(Session::get('applocale'));
        } else {
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
