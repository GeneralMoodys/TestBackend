<?php

namespace App\Http\Controllers;

use App\Repositories\MobilRepository;
use Illuminate\Http\Request;

class ControllerMobil extends Controller
{
    protected $MobilRepository;

    public function __construct(MobilRepository $MobilRepository)
    {
        $this->MobilRepository = $MobilRepository;
    }

    public function index()
    {
        $cars = $this->MobilRepository->all();
        return response()->json($cars);
    }

    public function show($id)
    {
        $car = $this->MobilRepository->find($id);
        return response()->json($car);
    }

    public function store(Request $request)
    {
        $car = $this->MobilRepository->create($request->all());
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $car = $this->MobilRepository->update($id, $request->all());
        return response()->json($car);
    }

    public function destroy($id)
    {
        $this->MobilRepository->delete($id);
        return response()->json(['message' => 'Car deleted successfully']);
    }
}
