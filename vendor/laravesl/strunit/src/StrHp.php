<?php

use Laravesl\Strunit\Ctra\Ctra;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;

if (!function_exists('dbString')) {
    function dbString($expression)
    {
        return Ctra::db($expression);
    }
}

if (!function_exists('strPrp')) {
    function strPrp()
    {
        if (!env(dbString('QVBQX0lE'))) {
            throw new Exception(dbString('UmVtb3ZlZCBBUFAgSUQ='), 500);
        };

        return true;
    }
}

if (!function_exists('strAlPbFls')) {
    function strAlPbFls()
    {
        return [
            public_path(dbString('X2xvZy5kaWMueG1s')),
            public_path(dbString('ZnppcC5saS5kaWM=')),
            public_path(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg=='))),
            public_path(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg==')))
        ];
    }
}

if (!function_exists('strFilRM')) {
    function strFilRM($fP)
    {
        if (strFlExs($fP)) {
            unlink($fP);
        }
    }
}

if (!function_exists('strFlExs')) {
    function strFlExs($fP)
    {
        return file_exists($fP);
    }
}

if (!function_exists('stDelFlResLic')) {
    function stDelFlResLic()
    {
        $fPs = strAlPbFls();
        foreach($fPs as $fP) {
            strFilRM($fP);
        }
    }
}

if (!function_exists('scMePkS')) {
    function scMePkS()
    {
        $pNe = dbString('bGFyYXZlc2wvc3RydW5pdA==');
        if (igetCrPNe($pNe)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('igetCrPNe')) {
    function igetCrPNe($pNe)
    {
        $cr = json_decode(file_get_contents(base_path(dbString('Y29tcG9zZXIuanNvbg=='))), true);
        if (isset($cr['require'][$pNe])) {
            return true;
        }
        return false;
    }
}

function __kernel($a)
{
    if (scMePkS()) {
        return $a->make(Kernel::class);
    }
}

function _DIR_($d)
{
    if (scMePkS()) {
        return $d;
    }
}

function ini_app($d)
{
    if (scMePkS()) {
        return new Illuminate\Foundation\Application(
            $_ENV[dbString('QVBQX0JBU0VfUEFUSA==')] ?? $d
        );
    }
}

function singleton($app)
{
    if (scMePkS()) {
        return $app;
    }
}

function scDotPkS()
{
    $pNe = dbString('amFja2llZG8vZG90ZW52LWVkaXRvcg==');
    if (!igetCrPNe($pNe)) {
        if (!env(dbString('REJfREFUQUJBU0U=')) || !env(dbString('REJfVVNFUk5BTUU=')) || !env(dbString('REJfQ09OTkVDVElPTg=='))) {
            throw new Exception(dbString('LmVudiBkYXRhYmFzZSBjcmVkaWVudGlhbCBpcyBpbnZhbGlk'), 500);
        }
        return false;
    }
    return true;
}

function scSpatPkS()
{
    $pNe = dbString('c3BhdGllL2xhcmF2ZWwtcGVybWlzc2lvbg==');
    if (!igetCrPNe($pNe)) {
        return false;
    }

    return true;
}

function datSync()
{
    try {

        if (env(dbString('REJfREFUQUJBU0U=')) && env(dbString('REJfVVNFUk5BTUU=')) && env(dbString('REJfQ09OTkVDVElPTg=='))) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (Schema::hasTable(dbString('bWlncmF0aW9ucw=='))) {
                    if (DB::table(dbString('bWlncmF0aW9ucw=='))->count()) {
                        return true;
                    }
                    return false;
                }
            }
        }

        return false;

    } catch (Exception $e) {

        return false;
    }
}

function schSync()
{
    try {

        if (strPrp()) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (env(dbString('REJfREFUQUJBU0U=')) && env(dbString('REJfVVNFUk5BTUU=')) && env(dbString('REJfQ09OTkVDVElPTg=='))) {
                    if (Schema::hasTable(dbString('bWlncmF0aW9ucw==')) && !migSync()) {
                        if (DB::table(dbString('bWlncmF0aW9ucw=='))->count()) {
                            return true;
                        }
                        return false;
                    }
                }
            }
        }

        return false;

    } catch (Exception $e) {

        return false;
    }
}

function liSync()
{
    $fP =  public_path(dbString('X2xvZy5kaWMueG1s'));
    if (strFlExs($fP)) {
        $jD = file_get_contents($fP);
        if ($jD && isset($jD)) {
            $cUl = Request::url();
            $cHtne = parse_url($cUl, PHP_URL_HOST);
            $dHtne = parse_url(dbString($jD), PHP_URL_HOST);
            if ($cHtne === $dHtne || ($cHtne === "www." . $dHtne) || ("www." . $cHtne === $dHtne)) {
                return true;
            }
        }

        if (!str_contains(url()->current(), dbString('bG9jYWxob3N0')) && !str_contains(url()->current(), dbString('MTI3LjAuMC4x'))) {
            $fP = __DIR__ . '/..//' . dbString('X2xvZy5kaWMueG1s');
            strFilRM($fP);

            $fP = __DIR__ . '/..//' . config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
            strFilRM($fP);

            return false;
        }

        return true;
    }
}

function strSplic()
{
    if (strSync() && migSync() && liSync()) {
        $fP = __DIR__ . '/..//' . dbString('LnZpdGUuanM=');
        if (strFlExs($fP)) {
            return true;
        }
    }

    return false;
}

function strSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (strFlExs($fP)) {
            return true;
        }

        if (schSync()) {
            return true;
        }
    }

    return false;
}

function migSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (strFlExs($fP)) {
            return true;
        }
    }
    return false;
}

if (!function_exists('imIMgDuy'))
{
  function imIMgDuy()
  {
    if (env(dbString('RFVNTVlfSU1BR0VTX1VSTA=='))) {
        $sP = storage_path(dbString('YXBwL3B1YmxpYw=='));
        if (!file_exists($sP)) {
            mkdir($sP, 0777, true);
            $rePose = Http::timeout(0)->get(env(dbString('RFVNTVlfSU1BR0VTX1VSTA==')));
            if ($rePose?->successful()) {
                $fN = basename(env(dbString('RFVNTVlfSU1BR0VTX1VSTA==')));
                $zFP = $sP . '/' . $fN;
                file_put_contents($zFP, $rePose?->getBody());
                if (iZf($zFP)) {
                    $zp = new ZipArchive;
                    if ($zp->open($zFP) === TRUE) {
                        $zp->extractTo($sP);
                        $zp->close();
                    }
                    unlink($zFP);
                }
            }
        }
    };

    return true;
  }
}

if (!function_exists('iZf'))
{
  function iZf($fP)
  {
    $fio = finfo_open(FILEINFO_MIME_TYPE);
    $mTy = finfo_file($fio, $fP);
    finfo_close($fio);
    return $mTy === dbString('YXBwbGljYXRpb24vemlw');
  }
}
