<?php
use \App\Banner;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::insert([
        [
			'name'=> 'giveaway',
			'url_gambar'=> 'image/ca1.jpg',
			'date_show'=> '2018-07-02',
			'date_off'=> '2018-07-04',
		],
		[
			'name'=> 'promo',
			'url_gambar'=> 'image/guy2.jpg',
			'date_show'=> '2018-07-05',
			'date_off'=> '2018-07-08',
		]
        ]);
    }
} 
