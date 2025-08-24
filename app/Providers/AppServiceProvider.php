<?php

namespace App\Providers;

use App\Helpers\B2BHelper;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $allowedIPs = array_map('trim', explode(',', config('app.debug_allowed_ips')));

        $allowedIPs = array_filter($allowedIPs);

        if (empty($allowedIPs)) {
            return;
        }

        if (in_array(Request::ip(), $allowedIPs)) {
            Debugbar::enable();
        } else {
            Debugbar::disable();
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ParallelTesting::setUpTestDatabase(function (string $database, int $token) {
            Artisan::call('db:seed');
        });

        // Register B2B Blade directives
        Blade::if('b2bCanSeePrices', function () {
            return B2BHelper::canSeePrices();
        });

        Blade::if('b2bCanAddToCart', function () {
            return B2BHelper::canAddToCart();
        });

        Blade::if('b2bIsApproved', function () {
            return B2BHelper::getApprovalStatus() === 'approved';
        });

        Blade::if('b2bIsPending', function () {
            return B2BHelper::getApprovalStatus() === 'pending';
        });
    }
}
