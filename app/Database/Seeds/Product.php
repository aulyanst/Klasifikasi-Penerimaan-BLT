<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Product extends Seeder
{
    public function run()
    {
        //add data fake
        $data = [
            'product_name'=> 'Chiki',
            'product_stock'=> 10,
            'product_description'=> 'Belajar CRUD CodeIgniter 4',

        ];

        //Simple Queries
        $this->db->query('INSERT INTO products (product_name,product_stock,product_description) VALUES(:product_name:,:product_stock:,:product_description:)', $data);

        //Using Query Builder
        $this->db->table('products')->insert($data);
    }
}
