<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionMeo
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session -> has ('user_name'))
        {

        return $next($request);
    }
    else{
        $request->session()->flash ('msg', "Invalid Request");
        return redirect ('/login/meo');
    }
}
}
