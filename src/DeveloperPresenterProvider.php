<?php

namespace STORMSQ\DeveloperPresenter;

use Illuminate\Support\ServiceProvider;
use STORMSQ\DeveloperPresenter\Commands\GeneratePresenter;
use File;
class DeveloperPresenterProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/developer-presenter.php' => config_path('developer-presenter.php'),
        ],'developer-presenter');
        $this->commands([
            GeneratePresenter::class,
        ]);
        
    
    }

    // 註冊套件函式
    public function register()
    {

        $this->app->singleton('PresenterBuilder', function ($app) {
            return new PresenterBuilder();
        });
    }
}