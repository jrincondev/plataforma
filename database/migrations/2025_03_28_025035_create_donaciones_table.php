<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idtipo')->unsigned();
            $table->date('fecha');
            $table->string('donante');
            $table->string('contacto');
            $table->string('donacion');
            $table->string('soporte');
            $table->timestamps();
            $table->foreign('idtipo')->references(columns: 'id')->on('tipodonaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donaciones');
    }
};
