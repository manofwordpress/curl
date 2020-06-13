<?php
/**
 * Created by PhpStorm.
 * User: amrsharkas
 * Date: 13/06/2020
 * Time: 11:15 AM
 */

namespace sharkas\Curl;


use function config_path;
use Illuminate\Support\ServiceProvider;

class CurlServiceProvider extends ServiceProvider
{
    //bootstrap web services
    //listen for events
    //publish configurations files or database migrations
    public function boot()
    {
        //publish a config file
        $this->publishes([
            __DIR__.'/../config/quickmetric.php' => config_path('quickmetric.php')
        ]);
    }

    //extends functionality from other classes before application is ready
    //register service provider
    //create singleton classes
    public function register()
    {
       $this->app->singleton(Quickmetric::class,function (){
          return new Quickmetric();
       });
    }


}