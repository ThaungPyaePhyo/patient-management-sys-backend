<?php

namespace App\Services;


use App\Repositories\Volunteer\VolunteerRepositoryInterface;

class VolunteerService
{
    public function __construct(protected VolunteerRepositoryInterface $repository)
    {
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function getFirst($code)
    {
        return $this->repository->optionsQuery([])->where('code',$code)->firstOrFail();
    }
}
