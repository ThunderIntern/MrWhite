<?php

use Illuminate\Database\Seeder;

class seeder_catalog_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\model_catalog_category::insert([
            [
                'catalog_id' => 'cat0001',
                'category_id'=> '1',
                
            ],
            [
                'catalog_id' => 'cat0001',
                'category_id'=> 'ca0001',
                
            ],
            [
                'catalog_id' => 'cat0001',
                'category_id'=> 'ca0004',
                
            ],
            [
                'catalog_id' => 'cat0002',
                'category_id'=> '1',
                
            ],
            [
                'catalog_id' => 'cat0002',
                'category_id'=> 'ca0002',
                
            ],
            [
                'catalog_id' => 'cat0003',
                'category_id'=> 'ca0008',
                
            ],
            [
                'catalog_id' => 'cat0006',
                'category_id'=> 'ca0009',
                
            ],
            [
                'catalog_id' => 'cat0007',
                'category_id'=> 'ca0007',
                
            ],
            [
                'catalog_id' => 'cat0008',
                'category_id'=> 'ca0010',
                
            ],
            [
                'catalog_id' => 'cat0006',
                'category_id'=> '2',
                
            ],
            [
                'catalog_id' => 'cat0007',
                'category_id'=> '2',
                
            ],
            [
                'catalog_id' => 'cat0008',
                'category_id'=> '2',
                
            ],
        ]);
    }
}
