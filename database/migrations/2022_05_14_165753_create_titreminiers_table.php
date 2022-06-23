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
        Schema::create('titreminiers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numerotitre');
            $table->foreignId('natureminier_id');
            $table->foreignId('entreprise_id');
            $table->foreignId('region_id');
            $table->foreignId('substance_id');
            $table->string('datesignature');
            $table->string('dateoctro');
            $table->string('montant');
            $table->string('superficieOctroye');
            $table->string('superficieExploite');
            $table->string('superficieRendue');
            $table->string('superficieRehabilite');
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
        Schema::dropIfExists('titreminiers');
    }
};
