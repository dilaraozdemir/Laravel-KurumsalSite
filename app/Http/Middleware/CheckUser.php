<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRoles = Auth::user()->roles->pluck('name');
        # Displaying roles == dd($userRoles);

        if(!$userRoles->contains('user')){
            return redirect(route('admin_login'))->with('error','You do not have permission');
        }
        return $next($request);
    }
}
