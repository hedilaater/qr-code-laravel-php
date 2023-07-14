<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttistationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attistations', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->integer('cin');
            $table->string('fonction');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_debuit');
            $table->date('date_fin');
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
        Schema::dropIfExists('attistations');
    }
}
