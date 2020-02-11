<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class voterMiddleware
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
        if (Auth::guard('voter')->check()) {
            if ($request->has('id') && $request->has('status') == 0) {
                return redirect('/suara/home');
            }
            else {
                return redirect('/suara/aftervote');
            }
        }
        abort(403);
    }
}
