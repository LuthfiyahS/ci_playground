<?php namespace App\Database\Seeds;
  
class UsersSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'username'  => 'admin',
                'password'  =>  123456
            ],
            [
                'username'  => 'john',
                'password'  =>  123456
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
} 