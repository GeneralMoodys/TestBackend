<?php

namespace App\Repositories;

use App\Models\Motor;

class MotorRepository
{
    public function all()
    {
        return Motor::all();
    }

    public function find($id)
    {
        return Motor::find($id);
    }

    public function create(array $data)
    {
        return Motor::create($data);
    }

    public function update($id, array $data)
    {
        return Motor::find($id)->update($data);
    }

    public function delete($id)
    {
        return Motor::destroy($id);
    }
}
