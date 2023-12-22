<?php

use App\Models\TamuModel;
use CodeIgniter\Test\CIUnitTestCase;

class TamuTest extends CIUnitTestCase
{
    public function testGetTamu()
    {
        $model = new TamuModel();
        $tamu = $model->getTamu();

        $this->assertIsArray($tamu);
        // Add assertions based on your actual data
    }

    public function testCreateTamu()
    {
        $model = new TamuModel();
        $data = [
            'tgl_berkunjung' => '2023-01-01',
            'nama_tamu' => 'John Doe',
            'alamat' => '123 Main Street',
            'no_telepon' => '123-456-7890',
            'keperluan' => 'Meeting',
        ];

        $result = $model->createTamu($data);
        var_dump($result); 
        $this->assertNotNull($result);
    }

    public function testUpdateTamu()
    {
        $model = new TamuModel();
        $data = [
            'nama_tamu' => 'Updated Name',
            'alamat' => '456 New Street',
            'no_telepon' => '987-654-3210',
            'keperluan' => 'Updated Meeting',
        ];

        $result = $model->updateTamu(8, $data); // Assuming there is a tamu entry with ID 1

        $this->assertTrue($result);
    }

    public function testDeleteTamu()
    {
        $model = new TamuModel();
        $result = $model->deleteTamu(8); // Assuming there is a tamu entry with ID 1

        $this->assertTrue($result);
    }
}
