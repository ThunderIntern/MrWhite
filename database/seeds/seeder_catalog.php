<?php

use Illuminate\Database\Seeder;

class seeder_catalog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\model_catalog::insert([
            [
                'id_catalog' => 'cat0001',
                'barcode'=> '1111',
                'harga'=>'85000',
                'deskripsi'=> 'lorem ipsum',
                'url_gambar'=> 'image/baxter.jpg'
            ],
            [
                'id_catalog' => 'cat0002',
                'barcode'=> '1112',
                'harga'=>'95000',
                'deskripsi'=> 'lorem ipsum',
                'url_gambar'=> 'image/crew.jpeg'
            ],
            [
                'id_catalog' => 'cat0003',
                'barcode'=> '1113',
                'harga'=>'105000',
                'deskripsi'=> 'lorem ipsum',
                'url_gambar'=> 'image/layrite.jpg'
            ],
            [
                'id_catalog' => 'cat0004',
                'barcode'=> '1114',
                'harga'=>'86000',
                'deskripsi'=> 'lorem ipsum',
                'url_gambar'=> 'image/oilbased.jpg'
            ],
            [
                'id_catalog' => 'cat0005',
                'barcode'=> '1155',
                'harga'=>'86000',
                'deskripsi'=> 'shave gl',
                'url_gambar'=> 'image/shave.jpg'
            ],
            [
                'id_catalog' => 'cat0006',
                'barcode'=> '1156',
                'harga'=>'86000',
                'deskripsi'=> 'shave gl',
                'url_gambar'=> 'image/shave2.jpg'
            ],
            [
                'id_catalog' => 'cat0007',
                'barcode'=> '1175',
                'harga'=>'86000',
                'deskripsi'=> 'facial foam',
                'url_gambar'=> 'image/foam.jpg'
            ],
            [
                'id_catalog' => 'cat0008',
                'barcode'=> '1355',
                'harga'=>'86000',
                'deskripsi'=> 'moisturiser',
                'url_gambar'=> 'image/moisturiser.jpg'
            ],
        ]);
    }
}
