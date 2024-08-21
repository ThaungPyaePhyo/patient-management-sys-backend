<?php

namespace App\Api\Foundation\Repository;

interface EloquentRepositoryInterface
{
    public function all(array $options = []);

    public function insert(array $data);
    public function first(array $relations = []);

}
