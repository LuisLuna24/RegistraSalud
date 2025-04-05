<?php

namespace App\Providers;

use App\Models\User;
use App\View\Composers\AdminComposer;
use App\View\Composers\DoctorComposer;
use App\View\Composers\NutriologosComposer;
use App\View\Composers\PacientesComposer;
use App\View\Composers\PsicologoComposer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        Gate::define('admin-options', function (User $user, $role) {
            if ($user->hasRole($role)) {
                return true;
            }
        });

        View::composer('layouts.admin', AdminComposer::class);
        View::composer('layouts.doctores', DoctorComposer::class);
        View::composer('layouts.psicologos', PsicologoComposer::class);
        View::composer('layouts.nutriologos', NutriologosComposer::class);
        View::composer('layouts.pacientes', PacientesComposer::class);
    }
}
