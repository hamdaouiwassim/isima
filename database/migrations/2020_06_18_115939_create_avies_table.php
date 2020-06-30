<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avies', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('salle')->nullable();
            $table->integer('idmatiere');
            $table->integer('iduser');
            $table->integer('idfilliere');
            $table->string('type');
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
        Schema::dropIfExists('avies');
    }
}
