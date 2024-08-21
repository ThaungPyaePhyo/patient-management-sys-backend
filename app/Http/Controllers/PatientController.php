<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct(protected PatientService $service)
    {
    }
    public function store(PatientRequest $request)
    {
        $patient = $this->service->create($request);
        return response()->json($patient, 201);
    }

    public function index()
    {
        $patients = $this->service->getAll();
        return PatientResource::collection($patients);
    }

}
