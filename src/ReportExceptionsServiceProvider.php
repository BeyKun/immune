<?php
namespace Roketin\Immune;

use Illuminate\Support\ServiceProvider;

class ReportExceptionsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            \Roketin\Immune\Commands\RoketinImmuneKey::class,
        ]);

        $this->publishes([
            __DIR__.'/config/lumenReportExceptions.php' => resource_path('lumenReportExceptions.php'),
        ], 'config');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/lumenReportExceptions.php',
            'lumenReportExceptions'
        );
    }
}
