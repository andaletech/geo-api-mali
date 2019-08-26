<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id', false, true)->nullable();
            $table->bigInteger('location_type_id', false, true);
            $table->string('name')->index();
            $table->integer('population')->nullable();
            $table->string('area')->nullable();
            $table->json('extra')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->timestamps();

            $table->foreign('location_type_id')->references('id')->on('location_types');
            $table->foreign('parent_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
