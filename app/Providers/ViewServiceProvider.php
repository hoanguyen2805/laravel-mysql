<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        view()->composer('manage_product', CategoryComposer::class);
    }
}
