<?php

namespace App\Providers;

use App\Category;
use App\Trademark;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        //
        Schema::defaultStringLength(191);
        $categories = Category::all();
        $trademarks = Trademark::all();
        $category_parents = Category::where("parent_id",0)->get();
        view()->share('categories', $categories);
        view()->share('trademarks', $trademarks);
        view()->share('category_parents', $category_parents);
    }
}
