<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Associa la classe CreateNewUser all'interfaccia CreatesNewUsers
        $this->app->singleton(
            \Laravel\Fortify\Contracts\CreatesNewUsers::class,
            \App\Actions\Fortify\CreateNewUser::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Collega la vista di login personalizzata
        Fortify::loginView(function () {
            return view('auth.login');
        });

        // Collega altre viste personalizzate
        Fortify::registerView(function () {
            return view('auth.register');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth.passwords.reset', ['request' => $request]);
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.passwords.email');
        });

        // Configurazione per il rate limiter
        RateLimiter::for('login', function ($request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function ($request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
