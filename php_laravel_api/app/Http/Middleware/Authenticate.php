<?php

namespace App\Http\Middleware;

use App\Exceptions\BaseException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
        if (!$request->expectsJson())
            throw new BaseException(401);
//        return $request->expectsJson() ? null : route('login');
    }
}
