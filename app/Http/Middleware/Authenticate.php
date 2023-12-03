<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if ($request->is(config('admin.prefix') . '*')) {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/login';
        } else {
            return $request->expectsJson() ? null : back()->with('Error',"Invalid Admin Credentials !");
        }
    }
}
