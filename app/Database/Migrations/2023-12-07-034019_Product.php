<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Product extends Migration
{
    public function up()
    {
        
        //Memuat sruktur tabel untuk product
        $this->forge->addField([
            'product_id' => [
                'type'                  => 'INT',
                'constraint'            => 5,
                'unsigned'              => true,
                'auto_increment'        => true,
            ],
            'product_name' =>[
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'product_stock' =>[
                'type'        => 'INT',
                'constraint'  => 5,
            ],
            'product_description' =>[
                'type'  => 'TEXT',
                'null'  => true,
            ],
            'updated_at' =>[
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),   
            ],
            'created_at' => [
                'type'      => 'TIMESTAMP',
                'default'   => new RawSql('CURRENT_TIMESTAMP'),   
            ],
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('products');
    }
    
    public function down ()
    {
        //
    }
}

