<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\SubmissionSaved;
use App\Listeners\LogSubmission;


class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
	SubmissionSaved::class => [
    	LogSubmission::class,
	],
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
