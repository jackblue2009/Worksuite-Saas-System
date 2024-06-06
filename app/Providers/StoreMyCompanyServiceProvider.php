<?php

namespace App\Providers;

use App\Http\Controllers\SuperAdmin\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class StoreMyCompanyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    // public function boot(): void
    // {
    //     $companyController = new CompanyController();
    //     $request = new Request();
    //     $companyController->storeMyCompany($request);
    // }
}
