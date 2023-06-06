<?php

namespace Tests\Feature;

use App\Models\Kendaraan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KendaraanTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_Kendaraans()
    {
        Kendaraan::factory()->create();
        Kendaraan::factory()->create();

        $response = $this->get('/api/Kendaraans');

        $response->assertStatus(200);
        $response->assertJsonCount(2);
    }

    public function test_can_create_Kendaraan()
    {
        $KendaraanData = [
            'tahun_keluaran' => '2022',
            'warna' => 'Merah',
            'harga' => 50000000
        ];

        $response = $this->post('/api/Kendaraans', $KendaraanData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('Kendaraans', $KendaraanData);
    }

    public function test_can_update_Kendaraan()
    {
        $Kendaraan = Kendaraan::factory()->create();

        $updatedData = [
            'tahun_keluaran' => '2023',
            'warna' => 'Biru',
            'harga' => 60000000
        ];

        $response = $this->put('/api/Kendaraans/' . $Kendaraan->id, $updatedData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('Kendaraans', $updatedData);
    }

    public function test_can_delete_Kendaraan()
    {
        $Kendaraan = Kendaraan::factory()->create();

        $response = $this->delete('/api/Kendaraans/' . $Kendaraan->id);

        $response->assertStatus(200);
        $this->assertDeleted('Kendaraans', $Kendaraan->toArray());
    }
}
