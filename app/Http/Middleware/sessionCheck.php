<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class sessionCheck
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('status') == true) {
            return $next($request);
        } else {
            $request->session()->flash('msg', 'Invalid Request');
            return redirect()->route('login.login');
        }
    }
}
