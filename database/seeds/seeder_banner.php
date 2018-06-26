<?php

use Illuminate\Database\Seeder;

class seeder_banner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\model_banner::insert([
            [
                'id_banner' => '',
                'name'=> '',
                'url_gambar'=> '',
                'date_show'=> '',
                'date_off'=> '',
            ],
        ]);
    }
}
