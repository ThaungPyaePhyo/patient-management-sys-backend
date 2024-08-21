<?php

namespace App\Repositories\Patient;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use App\Api\Foundation\Repository\Eloquent\BaseRepository;

class PatientRepository extends BaseRepository implements PatientRepositoryInterface
{
    public function optionsQuery(array $options): Builder
    {
        return parent::optionsQuery($options);
    }

    public function connection(): Patient
    {
        return new Patient();
    }
}
