<?php

namespace Laravesl\Strunit\Co;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;
use Laravesl\Strunit\StringReq\StrConDb;
use Laravesl\Strunit\StringReq\StrR;
use Laravesl\Strunit\StringReq\StrVerR;
use Laravesl\Strunit\StrPro\Str;
use Laravesl\Strunit\StrPro\StrConf;
use Laravesl\Strunit\StrPro\StrDb;
use Illuminate\Support\Facades\Route;

class Co extends Controller
{
    public $con;

    public $li;

    public $da;

    public $lc;

    public function __construct(StrConf $con, StrDb $da, Str $li)
    {
        $this->li = $li;
        $this->da = $da;
        $this->con = $con;
        $this->lc = '';
    }

    public function stPhExRe()
    {
        return view(dbString('c3R2OjpzdHJx'), [
            dbString('Y29uZmlndXJhdGlvbnM=') => collect($this->con->getC())->collapse(),
            dbString('Y29uZmlndXJlZA==') => $this->con->conF(),
        ]);
    }

    public function stDitor()
    {
        if (!$this->con->conF()) {
            return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        }

        return view(dbString('c3R2OjpzdGRpcg=='), [
            dbString('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            dbString('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stvS()
    {
        return view(dbString('c3R2OjpzdHZp'));
    }

    public function stLis()
    {
        //testing
        if (!$this->con->conF()) {
            return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(dbString('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        }

        if (liSync()) {
            return to_route(dbString('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        stDelFlResLic();
        return view(dbString('c3R2OjpzdGxpYw=='), [
            dbString('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            dbString('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stVil(StrVerR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(dbString('ZXJyb3I='), json_decode($rs->getBody(), true)[dbString('bWVzc2FnZQ==')]);
        }

        if (scSpatPkS()) {
            $this->da->adminSetup($rl->all()[dbString('YWRtaW4=')]);
        }

        $fP = public_path(dbString('X2xvZy5kaWMueG1s'));
        if (!strFlExs($fP)) {
            $fc =  array(
                'dHlwZQ==' => base64_encode(str_replace(array(dbString('YmxvY2svbGljZW5zZS92ZXJpZnk='), dbString('aW5zdGFsbC9saWNlbnNl'), dbString('aW5zdGFsbC92ZXJpZnk=')), '', url()->current())),
            );

            file_put_contents($fP, $fc);
        }

        return to_route(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function stliSet(StrR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs) {
            if ($rs?->status() == Response::HTTP_OK) {
                $fP = public_path(dbString('X2xvZy5kaWMueG1s'));
                $lic = $rl->all();
                $this->lc = base64_encode(trim($lic[dbString('bGljZW5zZQ==')]));

                if (!file_exists($fP)) {
                    $fc =  array(
                        'dHlwZQ==' => base64_encode(str_replace(array(dbString('YmxvY2svbGljZW5zZS92ZXJpZnk='), dbString('aW5zdGFsbC9saWNlbnNl'), dbString('aW5zdGFsbC92ZXJpZnk=')), '', url()->current())),
                    );

                    file_put_contents($fP, $fc);
                }

                $fP = public_path(dbString('ZnppcC5saS5kaWM='));
                strFilRM($fP);
                $fc = array(
                    'dHlwZQ==' => $this->lc,
                );

                file_put_contents($fP, $fc);
                return to_route(dbString('aW5zdGFsbC5kYXRhYmFzZQ=='));
            }

            if (json_decode($rs?->getBody(), true)) {
                return back()->with(dbString('ZXJyb3I='), json_decode($rs?->getBody(), true)['message']);
            }
        }

        return back()->with(dbString('ZXJyb3I='), json_decode($rs?->getBody(), true) ?? dbString('U29tZXRoaW5nIFdlbnQgd3Jvbmc='));
    }

    public function stDatSet()
    {
        if (!$this->con->conF()) {
            return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(dbString('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        } elseif (!liSync()) {
            return to_route(dbString('aW5zdGFsbC5saWNlbnNl'));
        } elseif (datSync()) {
            if (!migSync()) {
                $fP = public_path(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')));
                if (!strFlExs($fP)) {
                    file_put_contents($fP, null);
                }
            }

            return to_route(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
        }

        return view(dbString('c3R2OjpzdGJhdA=='));
    }

    public function CoDatSet(StrConDb $rl)
    {
        $conn = $this->da->databaseSetup($rl->all());
        if ($conn != null) {
            return back()->with(dbString('ZXJyb3I='), $conn);
        }

        if (!$rl->has(dbString('aXNfaW1wb3J0X2RhdGE='))) {
            Artisan::call(dbString('ZGI6c2VlZA=='));
        }

        if (scSpatPkS() && !$rl->has(dbString('aXNfaW1wb3J0X2RhdGE='))) {
            $this->da->adminSetup($rl->all()[dbString('YWRtaW4=')], $rl->all()[dbString('ZGF0YWJhc2U=')]);
        }

        if ($rl->has(dbString('aXNfaW1wb3J0X2RhdGE='))) {
            if (isset($rl->all()[dbString('ZGF0YWJhc2U=')])) {
                $this->da->databaseConfiguration($rl->all()[dbString('ZGF0YWJhc2U=')]);
                $this->da->sqliSetup($rl->all()[dbString('ZGF0YWJhc2U=')]);

                if (file_exists(public_path(dbString('ZGIuc3Fs')))) {
                    Artisan::call(dbString('ZGI6d2lwZQ=='));
                    $sql = File::get(public_path(dbString('ZGIuc3Fs')));
                    DB::unprepared($sql);
                    imIMgDuy();
                }
            }
        }

        $fP = public_path(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (!strFlExs($fP)) {
            file_put_contents($fP, null);
        }

        if (scDotPkS()) {
            $this->da->env($rl->all()[dbString('ZGF0YWJhc2U=')]);
        }

        Artisan::call(dbString('c3RvcmFnZTpsaW5r'));
        return to_route(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function Con()
    {
        if (!migSync()) {
            return to_route(dbString('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        $fP = public_path(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (!strFlExs($fP)) {
            file_put_contents($fP, null);
        }

        return view(dbString('c3R2Ojpjbw=='));
    }

    public function blockSetup()
    {
        return view(dbString('c3R2OjpzdGJs'));
    }

    public function strBloVer(StrR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(dbString('ZXJyb3I='), json_decode($rs->getBody(), true)['message']);
        }

        $fP = public_path(dbString('ZnppcC5saS5kaWM='));
        strFilRM($fP);

        $fc =  array(
            'dHlwZQ==' => base64_encode($this->lc),
        );

        file_put_contents($fP, $fc);
        $this->rmStrig();
        if (Route::has(dbString('bG9naW4='))) {
            return to_route(dbString('bG9naW4='));
        }

        return to_route(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function strEraDom(Request $eRa)
    {
        try {

            if ($eRa->project_id != dbString(env(dbString('QVBQX0lE')))) {
                throw new Exception(dbString('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $fP = __DIR__ . '/../..//' . dbString('LnZpdGUuanM=');
            strFilRM($fP);
            stDelFlResLic();
            return response()->json(['success' => true], 200);
        } catch (Exception $e) {

            throw $e;
        }
    }

    public function blockLicense(Request $rl)
    {
        try {

            if ($rl->project_id != dbString(env(dbString('QVBQX0lE')))) {
                throw new Exception(dbString('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $fP = __DIR__ . '/../..//' . dbString('LnZpdGUuanM=');
            if (!strFlExs($fP)) {
                file_put_contents($fP, null);
            }

            return response()->json(['success' => true], 200);
        } catch (Exception $e) {

            throw $e;
        }
    }

    public function rmStrig()
    {
        $fP = __DIR__ . '/../..//' . dbString('LnZpdGUuanM=');
        strFilRM($fP);
    }

    public function unblockLicense()
    {
        $this->rmStrig();
        return response()->json(['success' => true], 200);
    }

    public function retLe()
    {
        $rs = $this->li->retLe();
        if ($rs->status() == Response::HTTP_OK) {
            stDelFlResLic();
            return back()->with(dbString('ZXJyb3I='), dbString('TGljZW5zZSBSZXNldCBTdWNjZXNzZnVsbHkh'));
        }

        return back()->with(dbString('ZXJyb3I='), dbString('U29tZXRoaW5nIHdlbnQgd3JvbmcsIHlvdSBjYW4ndCByZXNldCBsaWNlbnNl'));
    }
}
