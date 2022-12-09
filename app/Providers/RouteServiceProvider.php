<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';
    public const DASHBOARD = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/notification.php'));
                
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/payment.php'));

            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api/whatsapp.php'));

            Route::middleware('web')
                ->group(base_path('routes/api/whatsapp.php'));
            Route::middleware('web')
                ->group(base_path('routes/client/main.php'));
            Route::middleware('web')
                ->group(base_path('routes/office/main.php'));
            Route::middleware('web')
                ->group(base_path('routes/vendor/main.php'));

            Route::middleware('web')
                ->group(base_path('routes/web/main.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
