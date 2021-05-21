<?php

namespace Siaoynli\Baidu;

use Illuminate\Support\ServiceProvider;

class BaiduServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/baidu.php' => config_path('baidu.php'),
        ]);
    }
}
