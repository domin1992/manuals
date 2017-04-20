<?php

use Illuminate\Database\Seeder;

class ChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            'name' => 'Wstęp',
            'link_rewrite' => str_slug('Wstęp'),
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'
        ]);
        DB::table('chapters')->insert([
            'name' => 'Rozdział 1',
            'link_rewrite' => str_slug('Rozdział 1'),
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'
        ]);
        DB::table('chapters')->insert([
            'name' => 'Rozdział 2',
            'link_rewrite' => str_slug('Rozdział 2'),
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'
        ]);
        DB::table('chapters')->insert([
            'name' => 'Rozdział 3',
            'link_rewrite' => str_slug('Rozdział 3'),
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'
        ]);
        DB::table('chapters')->insert([
            'name' => 'Podrozdział 1',
            'link_rewrite' => str_slug('Podrozdział 1'),
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'
        ]);
        DB::table('chapters')->insert([
            'name' => 'Podrozdział 2',
            'link_rewrite' => str_slug('Podrozdział 2'),
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'
        ]);
    }
}
