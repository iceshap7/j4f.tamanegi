<?php

namespace Core\Providers;

use Core\Repositories\Contracts\CurlRepositoryContract;
use Core\Repositories\CurlRepository;
use Core\Services\Contracts\MessageServiceContract;
use Core\Services\MessageService;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // APP
        $ModulesDIR = dirname(__DIR__) . '/Modules';
        $modules = array_map('basename', \File::directories($ModulesDIR));
        foreach ($modules as $module) {
            // ROUTES AUTOLOAD
            if (file_exists($ModulesDIR  . '/' . $module . '/routes.php')) {
                include $ModulesDIR . '/' . $module . '/routes.php';
            }
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CurlRepositoryContract::class, CurlRepository::class);
        $this->app->bind(MessageServiceContract::class, MessageService::class);
    }
}
