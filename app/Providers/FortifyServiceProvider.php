<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;

class FortifyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Registrazione delle implementazioni delle interfacce di Fortify
        $this->app->singleton(
            \Laravel\Fortify\Contracts\CreatesNewUsers::class,
            CreateNewUser::class
        );

        $this->app->singleton(
            \Laravel\Fortify\Contracts\ResetsUserPasswords::class,
            ResetUserPassword::class
        );

        $this->app->singleton(
            \Laravel\Fortify\Contracts\UpdatesUserPasswords::class,
            UpdateUserPassword::class
        );

        $this->app->singleton(
            \Laravel\Fortify\Contracts\UpdatesUserProfileInformation::class,
            UpdateUserProfileInformation::class
        );
    }

    public function boot(): void
    {
        // Imposta le viste personalizzate per login e registrazione
        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::registerView(function () {
            return view('auth.register');
        });

        // Gestisce l'autenticazione personalizzata
        Fortify::authenticateUsing(function (Request $request) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $request->filled('remember'))) {
                $request->session()->regenerate();
                return Auth::user();
            }

            return null;
        });

        // Limita il numero di tentativi di login per migliorare la sicurezza
        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;
            return Limit::perMinute(5)->by($email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
