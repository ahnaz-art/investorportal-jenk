<?php

namespace App\Http\Middleware;

use Closure;

class pipline
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
