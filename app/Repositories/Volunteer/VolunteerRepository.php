<?php

namespace App\Repositories\Volunteer;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Builder;
use App\Api\Foundation\Repository\Eloquent\BaseRepository;

class VolunteerRepository extends BaseRepository implements VolunteerRepositoryInterface
{
    public function optionsQuery(array $options): Builder
    {
        return parent::optionsQuery($options);
    }

    public function connection(): Volunteer
    {
        return new Volunteer();
    }
}
