<?php

namespace App\Repositories\Patient;

use App\Api\Foundation\Repository\EloquentRepositoryInterface;

interface PatientRepositoryInterface extends EloquentRepositoryInterface
{
    public function optionsQuery(array $options);
    public function connection();
}
