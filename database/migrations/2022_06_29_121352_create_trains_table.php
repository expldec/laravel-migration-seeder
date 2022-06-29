<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('operator', 50);
            $table->string('start_station', 50);
            $table->string('end_station', 50);
            $table->datetime('departure_time', 0);
            $table->datetime('arrival_time', 0);
            $table->string('train_code', 8);
            $table->unsignedTinyInteger('cars');
            $table->boolean('is_on_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
