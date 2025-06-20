<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;


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
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        Builder::useVite();

        Blade::directive('isActiveRoute', function ($expression) {
            return "<?php echo isActiveRoute($expression); ?>";
        });

        $settings = getSettings(); // Fetch the settings
        $social = getSocialMediaLink();
        // Share $settings globally with all views
        View::share('settings', $settings);
        View::share('social', $social);
    }
}
