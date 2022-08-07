<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Project;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting['blogs'] = Blog::count();
        $setting['users'] = User::count();
        $setting['projects'] = Project::count();
        $setting['comments'] = Comment::count();
        View::share('setting', $setting);
        Paginator::useBootstrap();
    }
}
