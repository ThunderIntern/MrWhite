<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class seeder_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\model_category::insert([
            [
                'id_category' => '1',
                'jenis'=> 'perawatan',
                'name'=> 'rambut',
                'parent_id'=> '0',
            ],
            [
                'id_category' => '2',
                'jenis'=> 'perawatan',
                'name'=> 'wajah',
                'parent_id'=> '0',
            ],
            [
                'id_category' => 'ca0001',
                'jenis'=> 'brand',
                'name'=> 'baxter',
                'parent_id'=> '1',
            ],
            [
                'id_category' => 'ca0002',
                'jenis'=> 'brand',
                'name'=> 'american crew',
                'parent_id'=> '1',
            ],
            [
                'id_category' => 'ca0003',
                'jenis'=> 'brand',
                'name'=> 'layrite',
                'parent_id'=> '1',
            ],
            [
                'id_category' => 'ca0004',
                'jenis'=> 'bahan',
                'name'=> 'waterbased',
                'parent_id'=> '0',
            ],
            [
                'id_category' => 'ca0005',
                'jenis'=> 'bahan',
                'name'=> 'wax',
                'parent_id'=> '0',
            ],
            [
                'id_category' => 'ca0006',
                'jenis'=> 'bahan',
                'name'=> 'oilbased',
                'parent_id'=> '0',
            ],
            [
                'id_category' => 'ca0007',
                'jenis'=> 'brand',
                'name'=> 'nivea',
                'parent_id'=> '2',
            ],
            [
                'id_category' => 'ca0008',
                'jenis'=> 'brand',
                'name'=> 'gillete',
                'parent_id'=> '2',
            ],
            [
                'id_category' => 'ca0009',
                'jenis'=> 'brand',
                'name'=> 'edge',
                'parent_id'=> '2',
            ],
            [
                'id_category' => 'ca0010',
                'jenis'=> 'brand',
                'name'=> 'garnier',
                'parent_id'=> '2',
            ],
            // [
            //     'id_category' => 'ca0007',
            //     'jenis'=> 'brand_pic',
            //     'name'=> '/image/baxter.jpg',
            //     'parent_id'=> 'ca0001',
            // ],
            // [
            //     'id_category' => 'ca0008',
            //     'jenis'=> 'brand_pic',
            //     'name'=> '/image/crew.jpeg',
            //     'parent_id'=> 'ca0002',
            // ],
            // [
            //     'id_category' => 'ca0009',
            //     'jenis'=> 'brand_pic',
            //     'name'=> '/image/layrite.jpeg',
            //     'parent_id'=> 'ca0003',
            // ],
        ]);// $faker = Faker::create();
        // foreach (range(0,10) as $i) {
        // 	DB::table('tbl_category')->insert([
        // 		'id_category' => $faker->numerify('cat###'),
        // 		'nama_category'=> $faker->name,
        // 		'url_gambar'=> $faker->imageUrl($width = 640, $height = 480),
        // 	]);
        // }
    }
}