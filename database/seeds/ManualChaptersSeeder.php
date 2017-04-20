<?php

use Illuminate\Database\Seeder;

class ManualChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // manual 1
        DB::table('manual_chapters')->insert([
            'manual_id' => 1,
            'chapter_id' => 1,
            'level_depth' => 0,
            'parent_id' => 0,
            'position' => 0,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 1,
            'chapter_id' => 2,
            'level_depth' => 0,
            'parent_id' => 0,
            'position' => 1,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 1,
            'chapter_id' => 3,
            'level_depth' => 0,
            'parent_id' => 0,
            'position' => 2,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 1,
            'chapter_id' => 5,
            'level_depth' => 1,
            'parent_id' => 3,
            'position' => 0,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 1,
            'chapter_id' => 6,
            'level_depth' => 1,
            'parent_id' => 3,
            'position' => 1,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 1,
            'chapter_id' => 4,
            'level_depth' => 0,
            'parent_id' => 0,
            'position' => 3,
        ]);

        // manual 2
        DB::table('manual_chapters')->insert([
            'manual_id' => 2,
            'chapter_id' => 1,
            'level_depth' => 0,
            'parent_id' => 0,
            'position' => 0,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 2,
            'chapter_id' => 2,
            'level_depth' => 0,
            'parent_id' => 0,
            'position' => 1,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 2,
            'chapter_id' => 5,
            'level_depth' => 1,
            'parent_id' => 8,
            'position' => 0,
        ]);
        DB::table('manual_chapters')->insert([
            'manual_id' => 2,
            'chapter_id' => 6,
            'level_depth' => 2,
            'parent_id' => 9,
            'position' => 0,
        ]);
    }
}
