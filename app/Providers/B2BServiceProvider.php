<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
use App\Listeners\B2BRegistrationListener;

class B2BServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services for B2B functionality
     *
     * @return void
     */
    public function boot()
    {
        $this->registerBladeDirectives();
        $this->registerViewOverrides();
        $this->registerViewComposers();
        $this->registerEventListeners();
    }

    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register view overrides to provide upgrade-safe template modifications
     *
     * @return void
     */
    protected function registerViewOverrides(): void
    {
        // Load custom view paths for B2B templates
        $this->loadViewsFrom(resource_path('views'), 'b2b');
        
        // Override specific price templates with B2B versions
        $viewFactory = $this->app['view'];
        
        // Register view finder to use our overrides
        $viewFactory->addLocation(resource_path('views'));
    }

    /**
     * Register Blade directives for B2B functionality
     *
     * @return void
     */
    protected function registerBladeDirectives(): void
    {
        // Check if customer can see prices
        Blade::directive('b2bCanSeePrices', function () {
            return '<?php if (App\Helpers\B2BHelper::canSeePrices()): ?>';
        });

        Blade::directive('elseb2bCanSeePrices', function () {
            return '<?php else: ?>';
        });

        Blade::directive('endb2bCanSeePrices', function () {
            return '<?php endif; ?>';
        });

        // Check if customer has pending B2B status
        Blade::directive('b2bIsPending', function () {
            return '<?php if (auth()->guard(\'customer\')->check() && auth()->guard(\'customer\')->user()->isPending()): ?>';
        });

        Blade::directive('elseb2bIsPending', function () {
            return '<?php else: ?>';
        });

        Blade::directive('endb2bIsPending', function () {
            return '<?php endif; ?>';
        });

        // Check if customer is approved
        Blade::directive('b2bIsApproved', function () {
            return '<?php if (auth()->guard(\'customer\')->check() && auth()->guard(\'customer\')->user()->isApproved()): ?>';
        });

        Blade::directive('endb2bIsApproved', function () {
            return '<?php endif; ?>';
        });
    }

    /**
     * Register view composers for B2B functionality
     *
     * @return void
     */
    protected function registerViewComposers(): void
    {
        // Modify price templates to add B2B protection
        view()->composer([
            'shop::products.prices.index',
            'shop::products.prices.configurable', 
            'shop::products.prices.bundle',
            'shop::products.prices.grouped'
        ], function (View $view) {
            $view->with('b2bProtection', true);
        });

        // Modify product view to add B2B cart button protection
        view()->composer('shop::products.view', function (View $view) {
            $view->with('canAddToCart', \App\Helpers\B2BHelper::canSeePrices());
        });

        // Modify product cards to add B2B protection
        view()->composer('shop::components.products.card', function (View $view) {
            $view->with('canAddToCart', \App\Helpers\B2BHelper::canSeePrices());
        });
    }


    /**
     * Register event listeners for B2B functionality
     *
     * @return void
     */
    protected function registerEventListeners(): void
    {
        // Listen to customer registration events
        Event::listen('customer.registration.after', B2BRegistrationListener::class);
    }
}