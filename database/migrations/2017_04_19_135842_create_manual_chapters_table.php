<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManualChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manual_id');
            $table->integer('chapter_id');
            $table->integer('level_depth');
            $table->integer('parent_id');
            $table->integer('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('manual_chapters');
    }
}
