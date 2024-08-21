<?php

namespace App\Services;

use App\Repositories\Patient\PatientRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PatientService
{
    public function __construct(protected PatientRepositoryInterface $repository)
    {
    }

    public function create( $data)
    {
        $input['name'] = $data['name'];
        $input['code'] =  str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $input['volunteer_id'] = $data['volunteer_id'];
        DB::beginTransaction();
        try {
            $patient = $this->repository->insert($input);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->errorLogger($e->getMessage(), $e->getFile(), $e->getLine());
            return false;
        }
        return true;
    }

    public function getAll()
    {
        return $this->repository->all();
    }
}
