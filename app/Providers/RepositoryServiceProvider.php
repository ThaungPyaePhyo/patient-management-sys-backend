<?php

namespace App\Providers;

use App\Repositories\Volunteer\VolunteerRepository;
use App\Repositories\Volunteer\VolunteerRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Patient\PatientRepository;
use App\Repositories\Patient\PatientRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->app->singleton(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->singleton(VolunteerRepositoryInterface::class, VolunteerRepository::class);
    }
}
