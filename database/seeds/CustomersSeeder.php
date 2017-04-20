<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'email' => str_random(10).'@gmail.com',
        ]);
        DB::table('customers')->insert([
            'email' => str_random(10).'@gmail.com',
        ]);
    }
}
