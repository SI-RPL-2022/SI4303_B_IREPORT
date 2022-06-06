<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if (!Auth::check()){ // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
            return redirect('login');
        }
        $user = Auth::user();

            if($user && $user->role !=$role){
                return App::abort(Auth::check()?403:401,
                Auth::check()?'Access Denied ':'Unauthorized');
            }
        return $next($request);
    }
}