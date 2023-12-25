<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table = 'tb_tamu';
    protected $primaryKey= 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_berkunjung','nama_tamu','alamat','no_telepon','keperluan','user_id'];
    
    public function getTamu($id = null)
    {
        if ($id === null) {
//            return $this->findAll();
            return $this->select('users.*, tb_tamu.*')
            ->join('users', 'tb_tamu.user_id = users.id', 'left') // Assuming 'user_id' is the foreign key in tb_tamu
            ->findAll();
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

    // Define your relationships
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\UsersModel', 'user_id');
    // }

}
