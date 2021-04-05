<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Closure;
use Session;
use Illuminate\Http\Request;
class Language
{
    
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('language')){
            app()->setlocale(Session::get('language'));
        }

        return $next($request);
    }
}

