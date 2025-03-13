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

        \View::composer('ebook.testimonials', function($view) {
            $testimonials = collect([
                [
                    "name" => "JessM89",
                    "review" => "I was completely lost before finding this eBook. Now I know exactly what to do for my son's high school application. Worth every second of reading!"
                ],
                [
                    "name" => "David R.",
                    "review" => "Super clear, super useful. NYC high school admissions are insane, but this actually made it make sense. Wish I had this when my older kid applied!"
                ],
                [
                    "name" => "SamK",
                    "review" => "Loved the breakdown of school types. I had no idea what 'screened' really meant before this. Now I feel like an expert!"
                ],
                [
                    "name" => "MikeT123",
                    "review" => "The example essays alone are gold. My daughter is using them as inspiration, and it's making a huge difference in her applications!"
                ],
                [
                    "name" => "LauraC",
                    "review" => "I had no clue how important MySchools rankings were. This guide saved me from making a major mistake. Thank you!!!"
                ],
                [
                    "name" => "J.Nguyen",
                    "review" => "Finally, an SHSAT guide that doesn’t confuse me. Straight to the point and actually helpful."
                ],
                [
                    "name" => "OliviaP",
                    "review" => "So grateful for this! We can’t afford private school, and this made navigating the public options so much easier."
                ],
                [
                    "name" => "emjay_nyc",
                    "review" => "Beyond helpful. Explains the process without making you feel like you need a PhD to understand it."
                ],
                [
                    "name" => "ChrisW.",
                    "review" => "Honestly, every NYC parent needs this. Wish I had found it sooner!"
                ]
            ]);

            $view->with(compact('testimonials'));
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
