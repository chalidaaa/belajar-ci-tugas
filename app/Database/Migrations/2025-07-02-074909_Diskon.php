<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Diskon extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'tanggal'    => ['type' => 'DATE', 'null' => false, 'unique' => true],
            'nominal'    => ['type' => 'DOUBLE', 'null' => false],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('diskon', true);
    }

    public function down()
    {
        $this->forge->dropTable('diskon');
    }
}
