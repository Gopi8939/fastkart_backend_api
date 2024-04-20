<?php

namespace Laravesl\Strunit\StringMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Exceptions\HttpResponseException;

class StrWBl
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSplic()) {
        if (Route::has(dbString('bG9naW4='))) {
          return to_route(dbString('bG9naW4='));
        }
        return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
      }

      return to_route(dbString('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
    }
}
