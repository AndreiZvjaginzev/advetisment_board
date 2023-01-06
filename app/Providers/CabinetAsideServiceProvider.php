<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\View\Composers\CabinetComposer;

class CabinetAsideServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        
        View::composer(['pages.cabinet', 'pages.cabinetnewadvert','pages.cabinetfavorite','pages.myadverts'], CabinetComposer::class);
    }
}
