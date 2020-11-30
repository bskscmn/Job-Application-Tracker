<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // to eliminate the error during migration :
        // => 1071 Specified key was too long; max key length is 767 bytes
        Schema::defaultStringLength(191); 
        
        /* 
        *
        * uncomment this for share hosting:
        *

        $this->app->bind('path.public', function() {
            return base_path().'/../public_html/jobapplications.basaksecmen.com';
        });
        */

        Inertia::share([
            // ...
            'locale' => function () {
                return app()->getLocale();
            },
            'language' => function () {
                return translations(
                    resource_path('lang/'. app()->getLocale() .'.json')
                );
            },
            // ...
        ]);
    }
}
