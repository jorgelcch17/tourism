<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTourismPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_tourism_place', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->references('id')->on('tags');
            $table->foreignId('tourism_place_id')->references('id')->on('tourism_places');
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
        Schema::dropIfExists('tag_tourism_place');
    }
}
