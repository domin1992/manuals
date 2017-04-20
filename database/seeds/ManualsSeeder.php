<?php

use Illuminate\Database\Seeder;

class ManualsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manuals')->insert([
            'name' => 'Wordpress Website',
            'link_rewrite' => str_slug('Wordpress Website'),
        ]);
        DB::table('manuals')->insert([
            'name' => 'Prestashop Powerful E-commerce',
            'link_rewrite' => str_slug('Prestashop Powerful E-commerce'),
        ]);
    }
}
