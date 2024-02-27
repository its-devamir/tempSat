<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $segments = $request->segments();
        if(count($segments) > 0 && in_array($segments[0], ['fa','en']))
        {
            app()->setLocale($segments[0]);
            $request->server->set('REQUEST_URI',substr($request->getRequestUri(),3));
        }else{
            // app()->setLocale('fa');
            return redirect('/fa' . $request->getRequestUri());
        }
        return $next($request);
    }
}
