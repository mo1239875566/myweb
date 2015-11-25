<?php

namespace App\Providers;

use App\service\MyMailerServices;
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
        //
    }

    public function register()       //各种服务器的注册器
    {
        $this->app->singleton('MyMailerServices', function($app)
        {
            return new MyMailerServices();

        }); //
        $this->app->bind('App\contract\Mailer','App\service\MyMailerServices'); //注册一个邮件的服务
     }


}
