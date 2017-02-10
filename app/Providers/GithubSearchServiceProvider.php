<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\GithubSearchRepos;

class GithubSearchServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GithubSearch::class, function ($app) {
            return new GithubSearch();
        });
    }
}
