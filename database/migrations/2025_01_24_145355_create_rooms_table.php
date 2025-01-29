<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // Colonna ID primaria
            $table->string('name'); // Nome della camera
            $table->text('description')->nullable(); // Descrizione
            $table->decimal('price', 8, 2); // Prezzo
            $table->integer('capacity'); // Numero massimo di ospiti
            $table->boolean('is_available')->default(true); // Disponibilità
            $table->string('image')->nullable(); // Immagine (opzionale)
            $table->timestamps(); // Created_at e Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
