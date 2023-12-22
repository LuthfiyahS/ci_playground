<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table = 'tb_tamu';
    protected $primaryKey= 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_berkunjung','nama_tamu','alamat','no_telepon','keperluan'];
    
    public function getTamu($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function createTamu($data)
    {
        return $this->insert($data);
    }

    public function updateTamu($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteTamu($id)
    {
        return $this->delete($id);
    }



}
