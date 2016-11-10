<?php

namespace CRUX\Http\Middleware;

use Closure;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
class RoleMiddleware
{
   public function handle($request, Closure $next, $role) {
      echo "Role: ".$role;
      return $next($request);
   }
}