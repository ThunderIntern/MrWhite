<?php

use Illuminate\Database\Seeder;

class seeder_setting_web extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\model_setting_web::insert([
            [
                'id_setting' => '',
                'jenis'=> '',
                'isi'=> ''
            ],
        ]);
    }
}
