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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('cours_title');
            $table->string('cours_video');
            $table->text('cours_pedagogique');
            $table->text('cours_resume');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
};
