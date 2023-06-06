<?php

namespace App\Http\Controllers;

use App\Repositories\KendaraanRepository;
use Illuminate\Http\Request;

class ControllerKendaraan extends Controller
{
    protected $KendaraanRepository;

    public function __construct(KendaraanRepository $KendaraanRepository)
    {
        $this->KendaraanRepository = $KendaraanRepository;
    }

    public function index()
    {
        $vehicles = $this->KendaraanRepository->all();
        return response()->json($vehicles);
    }

    public function show($id)
    {
        $vehicle = $this->KendaraanRepository->find($id);
        return response()->json($vehicle);
    }

    public function store(Request $request)
    {
        $vehicle = $this->KendaraanRepository->create($request->all());
        return response()->json($vehicle);
    }

    public function update(Request $request, $id)
    {
        $vehicle = $this->KendaraanRepository->update($id, $request->all());
        return response()->json($vehicle);
    }

    public function destroy($id)
    {
        $this->KendaraanRepository->delete($id);
        return response()->json(['message' => 'Vehicle deleted successfully']);
    }
}
