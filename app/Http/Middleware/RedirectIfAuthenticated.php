<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        
        if (Auth::guard('mahasiswa')->check()){
            return redirect('/mhs/dashboard');
        }elseif (Auth::guard('admin')->check()) {
            return redirect('/adm');
        }elseif (Auth::guard('prodi')->check()) {
            return redirect('/prodi/index');
        }elseif (Auth::guard('keuangan')->check()) {
            return redirect('/keuangan/index');
        }
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        return $next($request);
    }
}
