<?php
namespace omaradel\Algoriza;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class AlgorizaBaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
        $this->registerResources();
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}