<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
        protected $fillable = ['tahun_keluaran', 'warna', 'harga'];
}
