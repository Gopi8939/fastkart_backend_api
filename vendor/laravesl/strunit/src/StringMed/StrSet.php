<?php

namespace Laravesl\Strunit\StringMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StrSet
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSync()) {
        DB::connection()->getPDO();
        if (DB::connection()->getDatabaseName()) {
            if (env(dbString('REJfREFUQUJBU0U=')) && env(dbString('REJfVVNFUk5BTUU=')) && env(dbString('REJfQ09OTkVDVElPTg=='))) {
                if (Schema::hasTable(dbString('c2VlZGVycw==')) && !migSync()) {
                  if (DB::table(dbString('c2VlZGVycw=='))->count()) {
                    return to_route(dbString('aW5zdGFsbC5saWNlbnNl'));;
                  }
                }
            }
        }

        return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
      }

      if (strSplic() && $request->is(dbString('YWRtaW4vKg=='))) {
        return to_route(dbString('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
