<?php

namespace App\Repositories\Volunteer;

use App\Api\Foundation\Repository\EloquentRepositoryInterface;

interface VolunteerRepositoryInterface extends EloquentRepositoryInterface
{
    public function optionsQuery(array $options);
    public function connection();
}
