<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminCheck
{

    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('user_type') == 'admin') {
            return $next($request);
        } else {
            $request->session()->flash('msg', 'Invalid Request');
            return redirect()->route('login.login');
        }
        return $next($request);
    }
}
