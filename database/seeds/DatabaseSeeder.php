<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	     $this->call(seeder_category::class);
	     $this->call(seeder_catalog::class);
         $this->call(seeder_catalog_category::class);
         // $this->call(seeder_banner::class);
         // $this->call(seeder_link_catalog::class);
         // $this->call(seeder_setting_web::class);
    }
}
