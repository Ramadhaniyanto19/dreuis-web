<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\InformationRs;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share data dengan semua view yang menggunakan layout
        View::composer('components.layout', function ($view) {
            $informationRs = InformationRs::latest()->take(1)->get();;
            $view->with('informationRs', $informationRs); // Kirim data ke view
        });
    }
}
