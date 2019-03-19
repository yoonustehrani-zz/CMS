<?php

namespace HRZ\Cms\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next, $protected = NULL)
    {
        return ($protected == 'protected') ? redirect('/') : $next($request);
    }
}

