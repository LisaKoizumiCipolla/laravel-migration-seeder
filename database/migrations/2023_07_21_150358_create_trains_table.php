<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('company', 50);
            $table->string('departure_station', 70);
            $table->string('arrival_station', 70);
            $table->date('departure_time', $precision = 0);
            $table->date('arrival_time', $precision = 0);
            $table->string('train_code', 10);
            $table->tinyInteger('number_train_carriage')->unsigned();
            $table->boolean('on_time')->nullable();
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
