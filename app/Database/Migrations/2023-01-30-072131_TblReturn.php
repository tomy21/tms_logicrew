<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblReturn extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'code_return' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'resi' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'ekspedisi' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'warehouse' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'agen' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'desc' => [
                'type'              => 'ENUM',
                'constraint'        => ['in','out'],
            ],
            'created_at'   => [
                'type'              => 'datetime',
                'null'              => TRUE,
            ],
            'updated_at'   => [
                'type'              => 'datetime',
                'null'              => TRUE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tbl_return');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_return');
    }
}
