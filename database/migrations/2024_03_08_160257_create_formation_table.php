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
        Schema::create('formation', function (Blueprint $table) {
            $table->id();
            $table->string('formation_libelle');
            $table->text('formation_text_accrocheur');
            $table->text('formation_description');
            $table->unsignedBigInteger('tformation_id');
            $table->text('formation_resume');
            $table->string('formation_time');
            $table->string('formation_image');
            $table->string('formation_nature');
            $table->string('formation_niveau');
            $table->unsignedBigInteger('status');
            $table->timestamps();

            $table->foreign('tformation_id')->references('id')->on('type_formations')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('status')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation');
    }
};
