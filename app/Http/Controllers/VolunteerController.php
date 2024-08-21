<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerLoginRequest;
use App\Http\Resources\PatientResource;
use App\Http\Resources\VolunteerResource;
use App\Models\Volunteer;
use App\Services\VolunteerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class VolunteerController extends Controller
{
    public function __construct(protected VolunteerService $service)
    {
    }

    public function index()
    {
        $volunteers = $this->service->all();
        return VolunteerResource::collection($volunteers);
    }

    public function login(VolunteerLoginRequest $request)
    {
        $volunteer = $this->service->getFirst($request->code);

        if ($volunteer && Hash::check($request->password, $volunteer->password)) {
            return PatientResource::collection($volunteer->patients);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
