<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourismPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image360');
            $table->longText('description');
            $table->Text('location')->nullable();
            $table->boolean('is_active')->default(false);
            $table->date('date')->nullable();
            $table->string('hours')->nullable();
            $table->string('weater')->nullable();
            $table->string('price')->nullable();
            $table->string('altitude')->nullable();
            $table->string('essential')->nullable();
            $table->foreignId('tourism_category_id')->references('id')->on('tourism_categories')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tourism_places');
    }
}
