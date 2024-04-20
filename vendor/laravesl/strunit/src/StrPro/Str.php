<?php

namespace Laravesl\Strunit\StrPro;

use Exception;
use Illuminate\Support\Facades\Http;

class Str
{
    public function retLe()
    {
        try {

            $fP = __DIR__ . '/../../'.dbString('ZnppcC5saS5kaWM=');
            if (file_exists($fP)) {
                $jD = file_get_contents($fP);
                if ($jD && isset($jD)) {
                    return Http::post(dbString('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvcmVzZXQvbGljZW5zZQ=='),[
                        dbString('a2V5') => dbString($jD)
                    ]);
                }
            }

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function vl($r)
    {
        try {

            $ls = $r->all();
            if (strPrp()) {
                return Http::post(dbString('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvZW52YXRv'),[
                    dbString('a2V5') => trim($ls[dbString('bGljZW5zZQ==')]),
                    dbString('ZW52YXRvX3VzZXJuYW1l') => $ls[dbString('ZW52YXRvX3VzZXJuYW1l')],
                    dbString('ZG9tYWlu') => str_replace(array(dbString('YmxvY2svbGljZW5zZS92ZXJpZnk='), dbString('aW5zdGFsbC9saWNlbnNl'), dbString('aW5zdGFsbC92ZXJpZnk=')), '', url()->current()),
                    dbString('cHJvamVjdF9pZA==') => env(dbString('QVBQX0lE'))
                ]);
            }

        } catch (Exception $e) {

            throw $e;
        }
    }
}
