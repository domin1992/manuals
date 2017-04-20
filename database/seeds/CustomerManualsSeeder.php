<?php

use Illuminate\Database\Seeder;

class CustomerManualsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_manuals')->insert([
            'customer_id' => 1,
            'manual_id' => 1,
        ]);
        DB::table('customer_manuals')->insert([
            'customer_id' => 1,
            'manual_id' => 2,
        ]);
        DB::table('customer_manuals')->insert([
            'customer_id' => 2,
            'manual_id' => 2,
        ]);
    }
}
