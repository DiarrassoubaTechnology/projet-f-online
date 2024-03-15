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
        Schema::create('categorie_formation', function (Blueprint $table) {
            $table->id();
            $table->string('cat_f_libelle');
            $table->string('cat_f_icon');
            $table->string('cat_f_description');
            $table->integer('cat_f_status');
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
        Schema::dropIfExists('categorie_formation');
    }
};
