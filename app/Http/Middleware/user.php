<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Closure;

class user
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
        $userId = Crypt::decrypt($request->role);

        if($userId && $userId == Auth::user()->id){
            return $next($request);
        }
        else{
            return abort(404);
        }
    }
}
