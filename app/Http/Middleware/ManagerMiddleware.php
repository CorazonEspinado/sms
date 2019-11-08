<?php

namespace App\Http\Middleware;

use Closure;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach ($request->user()->roles as $role) {
            if ($role->id == 2) {
                return $next($request);
            } else {
                return response('Error!manager');
            }
        }
    }
}
