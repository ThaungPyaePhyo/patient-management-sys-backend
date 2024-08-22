<?php

namespace App\Api\Foundation\Repository\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Api\Foundation\Repository\EloquentRepositoryInterface;

abstract class BaseRepository implements EloquentRepositoryInterface
{

    public function all(array $options = [])
    {
        return $this->optionsQuery($options)->orderBy('id','DESC')->get();
    }

    public function first(array $relations = [])
    {
        return $this->connection()->query()->with($relations)->first();
    }

    protected function optionsQuery(array $options)
    {
        return $this->connection()->query();
    }


    public function insert(array $data)
    {
        return $this->connection()->query()->create($data);
    }

    abstract public function connection(): Model;
}
