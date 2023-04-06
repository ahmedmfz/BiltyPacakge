<?php 

namespace Mahfouz\Bitly;
use Illuminate\Support\ServiceProvider;


class  BitlyServiceProvider extends ServiceProvider{

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'./config/bitly.php' => config_path('bitly.php'),
        ],'bitly');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'./config/bitly.php', 'bitly'
        );
    }


}