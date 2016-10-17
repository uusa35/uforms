<?php

namespace Usama\Uforms;

use Illuminate\Support\ServiceProvider;

class UformsServiceProvider extends  ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'uforms');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/usama/uforms'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make(\Usama\Uforms\UformsController::class);
    }
}


/*
 * doing a package
 * 1- create foloder on the root MyName/Packagename
 * 2- create structure as the followoing :
 *  MyName/PackageName
 *              src
 *                  controllers
 *                  models
 *                  PackageNameServiceProvider
 *              views
 * 2- add the PackageNameServiceProvider within the config/app.php
 * 3- add the following to composer.json within psr-4
 *     "MyName\\PackageName\\" : "path from the root"
 * 4- within the PackageNameSErviceProvider add the following :
 *    first : register Method
 *     include the routes.php
 *     app->make the controller needed
 *      second : boot method
 *      this->loadViewsFrom('folder path related to the package __DIR__.'views' , 'helper'
 *
 *
 * 5-
 *
 *
 * */