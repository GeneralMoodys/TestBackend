<?php

namespace App\Repositories;

use App\Models\Mobil;

class MobilRepository
{
    public function all()
    {
        return Mobil::all();
    }

    public function find($id)
    {
        return Mobil::find($id);
    }

    public function create(array $data)
    {
        return Mobil::create($data);
    }

    public function update($id, array $data)
    {
        return Mobil::find($id)->update($data);
    }

    public function delete($id)
    {
        return Mobil::destroy($id);
    }
}
