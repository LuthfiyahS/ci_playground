<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berkas extends Migration
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
            'berkas'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'keterangan'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null' => true,
            ],
        ]);
        //primary key
        $this->forge->addKey('id', TRUE);
        //nama tabel
        $this->forge->createTable('berkas');
    }

    public function down()
    {
        $this->forge->dropTable('berkas');
    }
}
