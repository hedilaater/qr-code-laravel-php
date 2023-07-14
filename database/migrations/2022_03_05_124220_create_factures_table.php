<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('produit');
            $table->date('date_facture');
            $table->string('quantite');
            $table->string('prix');
            $table->string('ht');
            $table->text('r_sociale');
            $table->text('adresse');
            $table->text('ttc');
            $table->string('postale');
            $table->string('ville');
            $table->string('etat')->nullable();
            $table->string('societe')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
