<?php

namespace App\Providers;

use App\Repositories\{
    SettingRepository, SettingRepositoryInterface,
    EmployeeRepository, EmployeeInterface,
    OvertimeRepository, OvertimeRepositoryInterface
};
use App\Services\{
    SettingService, SettingServiceInterface,
    EmployeeService, EmployeeServiceInterface,
    OvertimeService, OvertimeServiceInterface
};
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(SettingServiceInterface::class, SettingService::class);

        $this->app->bind(EmployeeInterface::class, EmployeeRepository::class);
        $this->app->bind(EmployeeServiceInterface::class, EmployeeService::class);
        
        $this->app->bind(OvertimeRepositoryInterface::class, OvertimeRepository::class);
        $this->app->bind(OvertimeServiceInterface::class, OvertimeService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
