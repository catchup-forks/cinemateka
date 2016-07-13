<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Share collections to all views
         */
        $seances = \App\Models\Seance::all();

        $categories = \App\Models\Category::all();

        $events = \App\Models\Event::where([
            'published' => 1,
        ])->get();

        $programs = \App\Models\Program::where([
            'published' => 1,
        ])->get();

        $places = \App\Models\Place::where([
            'published' => 1,
        ])->get();

        $slides = \App\Models\Slide::where([
            'published' => '1',
        ])->get();

        view()->share('seances', $seances);
        view()->share('categories', $categories);
        view()->share('events', $events);
        view()->share('programs', $programs);
        view()->share('places', $places);
        view()->share('slides', $slides);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
