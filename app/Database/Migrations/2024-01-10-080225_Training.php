<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Training extends Migration
{
    public function up()
    {

        //Memuat sruktur tabel untuk training
        $this->forge->addField([
            'training_id' => [
                'type'                  => 'INT',
                'constraint'            => 11,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'umur' => [
                'type'        => 'INT',
                'constraint'  => 11,
            ],
            'jenis_bangunan' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'status_rumah' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'pekerjaan' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'penghasilan' => [
                'type'        => 'VARCHAR',
                'constraint'  => '50',
            ],
            'status' => [
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
        $this->forge->addKey('training_id', true);
        $this->forge->createTable('trainings');
    }

    public function down()
    {
        //
        $this->forge->dropTable('trainings');
    }
}
