<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tamu extends Migration
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
            'tgl_berkunjung'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'nama_tamu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'no_telepon' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '25',
            ],
            'keperluan'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null' => true,
            ],
            'user_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
        ],
        ]);
        //primary key
        $this->forge->addKey('id', TRUE);
        //nama tabel
        $this->forge->createTable('tb_tamu');
    }

    public function down()
    {
        $this->forge->dropTable('tb_tamu');
    }
}
