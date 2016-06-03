<?php

/**
 * Overwrite PasswordResetServiceProvider.
 *
 * @author artisan <codes.artisan@gmail.com>
 * @link(code-artisan, https://github.com/code-artisan)
 */

namespace App\Providers;

use App\Auth\Passwords\PasswordBrokerManager;
use Illuminate\Auth\Passwords\PasswordResetServiceProvider as IlluminatePasswordResetServiceProvider;

class PasswordResetServiceProvider extends IlluminatePasswordResetServiceProvider
{
    /**
     * Register the password broker instance.
     *
     * @return void
     */
    protected function registerPasswordBroker()
    {
        $this->app->singleton('auth.password', function ($app) {
            return new PasswordBrokerManager($app);
        });

        $this->app->bind('auth.password.broker', function ($app) {
            return $app->make('auth.password')->broker();
        });
    }
}
