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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ninea');
            $table->string('nombretitre');
            $table->string('nomfocal');
            $table->string('phonefocal');
            $table->string('fixefocal');
            $table->string('email');
            $table->string('siteweb');
            $table->string('societe');
            $table->foreignId('typepermi_id');
            $table->foreignId('typemine_id');
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
        Schema::dropIfExists('entreprises');
    }
};
