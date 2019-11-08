<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach ($request->user()->roles as $role) {
            if ($role->id == 1) {
                return $next($request);
            } else {
                return response('error!admin');
            }
        }
    }
}
