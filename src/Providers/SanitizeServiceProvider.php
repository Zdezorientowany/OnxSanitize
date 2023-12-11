<?php

namespace Onx\Sanitize\Providers;

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