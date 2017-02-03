<?php

namespace Utkarsh\QrCode\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Utkarsh\QrCode\Classes\QRcode;

class QrCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('QrCode', function()
        {
            return new QRcode;
        });
    }
}
