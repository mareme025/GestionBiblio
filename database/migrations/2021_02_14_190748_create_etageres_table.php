<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtageresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etageres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero');
            $table->string('capacite');
            $table->unsignedInteger('lecteur_id');
            $table->timestamps();
            //$table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            //RELATION ONTOMANY UNE CATEGORIE POUR UNE LISTE DE DOCUMENTS
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etageres');
    }
}
