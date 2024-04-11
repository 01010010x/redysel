<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdminMiddleware
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
        if (Auth::guest()|| !Auth::user()->isAdmin())
        {
            return redirect('/',301)->with('message','Debes ser administrador para entrar a este sitio');
        }

        return $next($request);
    }
}
