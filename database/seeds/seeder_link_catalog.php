<?php

use Illuminate\Database\Seeder;

class seeder_link_catalog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\model_link_catalog::insert([
            [
                'id_link' => '',
                'tag'=> '',
                'link'=> ''
            ],
        ]);
    }
}
