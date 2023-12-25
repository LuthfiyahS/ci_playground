<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $allowedFields = ['username','name','email','password','avatar'];

    // public function tbTamu()
    // {
    //     return $this->hasMany('App\Models\TamuModel', 'user_id');
    // }
}