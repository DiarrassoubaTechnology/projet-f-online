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
        Schema::create('prix_formation', function (Blueprint $table) {
            $table->id();
            $table->float('prix_formation');
            $table->unsignedBigInteger('formation_id');
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prix_formation');
    }
};
