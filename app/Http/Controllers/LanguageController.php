<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function __invoke($lang)
    {
        if (array_key_exists($lang, config('languages'))) {
            Session::put('applocale', $lang);
        }

        return Redirect::back();
    }
}
