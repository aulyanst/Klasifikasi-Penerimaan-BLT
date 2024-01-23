<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Testing extends Migration
{
    public function up()
    {

        //Memuat sruktur tabel untuk testing
        $this->forge->addField([
            'testing_id' => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
            'testingnama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'testingumur' => [
                'type'        => 'INT',
                'constraint'  => 11,
            ],
            'testingjenis_bangunan' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'testingstatus_rumah' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'testingpekerjaan' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'testingpenghasilan' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'testingstatus' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'updated_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'created_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('testing_id', true);
        $this->forge->createTable('testings');
    }

    public function down()
    {
        //
        $this->forge->dropTable('testings');
    }
}
