<?php

namespace Laravesl\Strunit\StringyPr;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Laravesl\Strunit\StrCm;

class StrAs extends ServiceProvider
{
  public function boot()
  {
    $this->register();
  }

  /**
    * Register the service provider.
    *
    * @return void
    */
  public function register()
  {
    if ($this->app->runningInConsole()) {
      $this->commands([
          StrCm::class,
      ]);
      Artisan::call('sqlstringify:publish');
    }
  }

}
