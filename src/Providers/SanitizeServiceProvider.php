<?php

namespace Onx\Sanitize\Providers;

use Illuminate\Support\ServiceProvider;
use Onx\Sanitize\Sanitize;

final class SanitizeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('sanitize', function () {
            return new Sanitize();
        });
    }

    public function boot()
    {
        //
    }
}