<?php

use \App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
        	[
			'jenis'=> 'category',
			'isi'=> 'category-list',
        	],
        	[
			'jenis'=> 'brand',
			'isi'=> 'brand-category',
        	],
        	[
			'jenis'=> 'sale',
			'isi'=> 'sale-product',
        	],
        	[
			'jenis'=> 'banner',
			'isi'=> 'banner',
        	],
        	[
			'jenis'=> 'catalog',
			'isi'=> 'product-catalog',
        	],
        ]);
    }
}
