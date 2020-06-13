<?php
/**
 * Created by PhpStorm.
 * User: amrsharkas
 * Date: 13/06/2020
 * Time: 1:11 PM
 */

namespace sharkas\Contactform;


use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','Contactform');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function register()
    {

    }
}