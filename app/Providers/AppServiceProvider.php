<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
      Schema::defaultStringLength(191);

      if(env('APP_ENV') !== 'local')
      {
          $url->forceScheme('https');
      }

      $url_segments = request()->segments();
      array_shift($url_segments);
      $url_without_locale = implode('/', $url_segments);

      View::share("url_without_locale", $url_without_locale );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
