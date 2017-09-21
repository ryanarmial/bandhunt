<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class RedirectIfAdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
      if (Auth::guard()->check()) {
          return redirect('/levis-tools');
      }

      //If request comes from logged in seller, he will
      //be redirected to seller's home page.
      if (Auth::guard('web_admin')->check()) {
        return redirect('/levis-tools');
      }
      return $next($request);
    }
}
