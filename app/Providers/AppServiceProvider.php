<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Personas;
use App\Observers\PersonaObserver;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Registrar el observer para Personas
        Personas::observe(PersonaObserver::class);
    }

    public function register()
    {
        //
    }
}
