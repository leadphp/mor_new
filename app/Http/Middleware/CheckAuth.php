<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckAuth
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
        return $next($request);

        $role  = Auth::user()->role;

          if( $role == 'admin')
          {
              return 'admin';

          }elseif( $role == 'admin')
          {
              return 'admin';

          }elseif( $role == 'admin')
          {
              return 'admin';
          }
    }
}
