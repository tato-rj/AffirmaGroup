<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Opportunity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \View::composer('opportunities.band', function($view) {
            $view->with(['opportunities' => Opportunity::inRandomOrder()->take(4)->get()]);
        });

        \View::composer('*', function($view) {
            $view->with(['job_types' => (new Opportunity)->types()]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::include('components.button');
        \Blade::include('components.fontawesome', 'fa');
        \Blade::include('components.section-title', 'header');
        \Blade::include('components.form.label', 'formlabel');
        \Blade::include('components.form.checkbox');
        \Blade::include('components.form.honeypot');
        \Blade::include('components.alert');
    }
}
