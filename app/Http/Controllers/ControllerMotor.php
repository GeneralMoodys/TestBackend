<?php

namespace App\Http\Controllers;

use App\Repositories\MotorRepository;
use Illuminate\Http\Request;

class ControllerMotor extends Controller
{
    protected $RepositoryMotor;

    public function __construct(MotorRepository $RepositoryMotor)
    {
        $this->RepositoryMotor = $RepositoryMotor;
    }

    public function index()
    {
        $motor = $this->RepositoryMotor->all();
        return response()->json($motor);
    }

    public function show($id)
    {
        $motor = $this->RepositoryMotor->find($id);
        return response()->json($motor);
    }

    public function store(Request $request)
    {
        $motor = $this->RepositoryMotor->create($request->all());
        return response()->json($motor);
    }

    public function update(Request $request, $id)
    {
        $motor = $this->RepositoryMotor->update($id, $request->all());
        return response()->json($motor);
    }

    public function destroy($id)
    {
        $this->RepositoryMotor->delete($id);
        return response()->json(['message' => 'Motor deleted successfully']);
    }
}
