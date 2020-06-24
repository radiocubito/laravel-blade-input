<?php

namespace Radiocubito\BladeInput;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeInputServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this
            ->registerPublishables()
            ->registerViews();
    }

    protected function registerPublishables(): self
    {
        if (! $this->app->runningInConsole()) {
            return $this;
        }

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/blade-input'),
        ], 'views');

        return $this;
    }

    protected function registerViews(): self
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blade-input');

        Blade::component('blade-input::components.input.group', 'input.group');
        Blade::component('blade-input::components.input.text', 'input.text');
        Blade::component('blade-input::components.card', 'card');

        return $this;
    }
}
