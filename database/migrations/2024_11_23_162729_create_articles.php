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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();  // ID UNIVOCO
            $table->string('title'); // Titolo dell'articolo
            $table->text('content'); // Contenuto dell'articolo
            $table->string('author')->nullable(); // Autore, può essere null
            $table->timestamp('published_at')->nullable(); // Data di pubblicazione
            $table->timestamps(); // Timestamp per created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
