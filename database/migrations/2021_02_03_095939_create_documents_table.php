<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomDocument');
            $table->string('auteur');
            $table->string('fichierDocument');
            $table->date('dateEdition');
            $table->unsignedInteger('categorie_id');
            $table->unsignedInteger('etagere_id')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
