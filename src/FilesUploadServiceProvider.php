<?php

namespace BaymaxUmasou\FilesUpload;

use Illuminate\Support\ServiceProvider;

class FilesUploadServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/route.php');

        $this->publishes([
            __DIR__.'/config/upload.php' => config_path('upload.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('upload', function () {
            return new FilesUpload;
        });
    }
}