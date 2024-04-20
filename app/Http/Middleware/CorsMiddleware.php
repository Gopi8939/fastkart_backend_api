<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedOrigins = ['http://localhost:3000']; // Replace with your frontend origin(s)

        if (in_array($request->server('HTTP_ORIGIN'), $allowedOrigins)) {
            $response = $next($request);
            $response->header('Access-Control-Allow-Origin', $request->server('HTTP_ORIGIN'));
            $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
            $response->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, X-Requested-With');
            return $response;
        }

        return response('Unauthorized', 401);
    }
}
