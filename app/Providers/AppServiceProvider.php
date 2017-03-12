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
        // http://stackoverflow.com/a/31228951/860041
        // if (\DB::connection() instanceof \Illuminate\Database\SQLiteConnection) {
        //     \DB::unprepared('PRAGMA foreign_keys=1');
        // }
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
