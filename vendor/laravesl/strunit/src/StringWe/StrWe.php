<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Laravesl\Strunit\Co', 'middleware' => 'web'], function () {
  Route::get(dbString('dW5ibG9jay97cHJvamVjdF9pZH0='), dbString('Q29AdW5ibG9ja0xpY2Vuc2U='));
  Route::get(dbString('YmxvY2sve3Byb2plY3RfaWR9'), dbString('Q29AYmxvY2tMaWNlbnNl'));
  Route::post(dbString('cmVzZXRMaWNlbnNl'), dbString('Q29AcmV0TGU='));
  Route::get(dbString('ZXJhc2Uve3Byb2plY3RfaWR9'), dbString('Q29Ac3RyRXJhRG9t'));
});

Route::group(['namespace' => 'Laravesl\Strunit\Co',  'middleware' => ['stBl', 'web']], function () {
  Route::post(dbString('YmxvY2svbGljZW5zZS92ZXJpZnk='), dbString('Q29Ac3RyQmxvVmVy'))->name(dbString('aW5zdGFsbC51bmJsb2Nr'));
  Route::get(dbString('YmxvY2s='), dbString('Q29AYmxvY2tTZXR1cA=='))->name(dbString('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
});

Route::group(['namespace' => 'Laravesl\Strunit\Co', 'middleware' => ['str', 'stBk','stWBl']], function() {
  Route::prefix(dbString('aW5zdGFsbA=='))->group(function () {
    Route::get(dbString('cmVxdWlyZW1lbnRz'), 'Co@stPhExRe')->name(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
    Route::get(dbString('ZGlyZWN0b3JpZXM='), 'Co@stDitor')->name(dbString('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
    Route::get(dbString('ZGF0YWJhc2U='), 'Co@stDatSet')->name(dbString('aW5zdGFsbC5kYXRhYmFzZQ=='));
    Route::get(dbString('dmVyaWZ5'), 'Co@stvS')->name(dbString('aW5zdGFsbC52ZXJpZnkuc2V0dXA='));
    Route::post(dbString('dmVyaWZ5'), 'Co@stVil')->name(dbString('aW5zdGFsbC52ZXJpZnk='));
    Route::get(dbString('bGljZW5zZQ=='), 'Co@stLis')->name(dbString('aW5zdGFsbC5saWNlbnNl'));
    Route::post(dbString('bGljZW5zZQ=='), 'Co@StliSet')->name(dbString('aW5zdGFsbC5saWNlbnNlLnNldHVw'));
    Route::post(dbString('ZGF0YWJhc2U='), 'Co@CoDatSet')->name(dbString('aW5zdGFsbC5kYXRhYmFzZS5jb25maWc='));
    Route::get(dbString('Y29tcGxldGVk'), 'Co@Con')->name(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
  });
});

