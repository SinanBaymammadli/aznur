<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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
