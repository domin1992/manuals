<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') === 'local'){
            $this->call(ChaptersSeeder::class);
            $this->call(CustomerManualsSeeder::class);
            $this->call(CustomersSeeder::class);
            $this->call(ManualChaptersSeeder::class);
            $this->call(ManualsSeeder::class);
        }
    }
}
