<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    protected function redirectTo($request)
    {
        if (!$request->is(config('admin.prefix') . '*')) {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
        }
    }
}