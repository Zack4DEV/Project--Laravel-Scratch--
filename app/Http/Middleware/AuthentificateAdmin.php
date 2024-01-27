<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateAdmin extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */

    protected function redirectTo($request): string
    {
            if (!$request->is(config('admin.prefix') . '*')) {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
        }
    }

}