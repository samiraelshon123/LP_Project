<?php

namespace App\Http\Middleware;
use Illuminate\Support\Str;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {

        //     if(Route::is('admin.*')){
        //         return route('adminlogin');
        //     }
    
        //     return route('login');
    
        // }
        return route(Str::startsWith(trim($request->route()->getPrefix(), '/'), 'admin')
            ? 'adminlogin' : 'login');
    }
}
