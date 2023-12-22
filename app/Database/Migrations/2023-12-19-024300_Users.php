<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //list field
        $this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'username'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'avatar'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null' => true,
            ],
        ]);
        //primary key
        $this->forge->addKey('id', TRUE);
        //nama tabel
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
        
    }
}
