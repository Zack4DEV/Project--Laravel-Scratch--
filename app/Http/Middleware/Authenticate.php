<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        if ($request->is(config('admin.prefix') . '*')) {
            return route('login_to_welcome');
        } else {
            return $request->expectsJson() ? null : route('login_form_welcome');
        }
    }
}
