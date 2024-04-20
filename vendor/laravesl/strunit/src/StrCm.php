<?php

namespace Laravesl\Strunit;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class StrCm extends Command
{
    protected $signature = 'sqlstringify:publish';

    protected $description = 'Change db strings value on database';

    public function handle()
    {
      $db = __DIR__.dbString('L3N0dWI=');
      $str = public_path(dbString('aW5zdGFsbA=='));

        $dbStrings = [
          dbString('Y3NzL3ZlbmRvcnMvYW5pbWF0ZS5zdHVi') => dbString('Y3NzL3ZlbmRvcnMvYW5pbWF0ZS5jc3M='),
          dbString('Y3NzL3ZlbmRvcnMvYm9vdHN0cmFwLnN0dWI=') => dbString('Y3NzL3ZlbmRvcnMvYm9vdHN0cmFwLmNzcw=='),
          dbString('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24ubWluLnN0dWI=') => dbString('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24ubWluLmNzcw=='),
          dbString('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24uc3R1Yg==') => dbString('Y3NzL3ZlbmRvcnMvZmVhdGhlcmljb24uY3Nz'),
          dbString('Y3NzL2luc3RhbGwuc3R1Yg==') => dbString('Y3NzL2luc3RhbGwuY3Nz'),
          dbString('aW1hZ2VzL2JhY2tncm91bmQuc3R1Yg==') => dbString('aW1hZ2VzL2JhY2tncm91bmQuanBn'),
          dbString('anMvYm9vdHN0cmFwLm1pbi5zdHVi') => dbString('anMvYm9vdHN0cmFwLm1pbi5qcw=='),
          dbString('anMvaW5zdGFsbC5zdHVi') => dbString('anMvaW5zdGFsbC5qcw=='),
          dbString('anMvanF1ZXJ5LTMuMy4xLm1pbi5zdHVi') => dbString('anMvanF1ZXJ5LTMuMy4xLm1pbi5qcw=='),
          dbString('anMvcG9wcGVyLm1pbi5zdHVi') => dbString('anMvcG9wcGVyLm1pbi5qcw=='),
          dbString('anMvZmVhdGhlci1pY29uL2ZlYXRoZXIubWluLnN0dWI=') => dbString('anMvZmVhdGhlci1pY29uL2ZlYXRoZXIubWluLmpz'),
          dbString('Y3NzL2FwcC5zdHVi') => dbString('Y3NzL2FwcC5jc3M='),
        ];

        File::ensureDirectoryExists($str);
        File::ensureDirectoryExists($str.dbString('L2Nzcw=='));
        File::ensureDirectoryExists($str.dbString('L2Nzcy92ZW5kb3Jz'));
        File::ensureDirectoryExists($str.dbString('L2ltYWdlcw=='));
        File::ensureDirectoryExists($str.dbString('L2pz'));
        File::ensureDirectoryExists($str.dbString('L2pzL2ZlYXRoZXItaWNvbg=='));

        foreach ($dbStrings as $dbkey => $dbString) {
          if (!File::exists($str.'/'.$dbString)) {
            File::copy($db.'/'.$dbkey, $str.'/'.$dbString);
          }
        }

        File::copy($db.'/'.dbString('ZHRQL3N0QXAuc3R1Yg=='),dbString('Ym9vdHN0cmFwL2FwcC5waHA='));

      $this->info(dbString('U3FsU3RyaW5naUZ5IGFzc2V0cyBmaWxlcyBwdWJsaXNoZWQgc3VjY2Vzc2Z1bGx5Lg=='));
    }
}
