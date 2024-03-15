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
        Schema::create('type_formations', function (Blueprint $table) {
            $table->id();
            $table->string('tformation_libelle');
            $table->unsignedBigInteger('catformation_id');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('catformation_id')->references('id')->on('categorie_formation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_formations');
    }
};
