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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->char('cep', 8);
            $table->string('rua', 50);
            $table->string('numero', 50);
            $table->string('complemento', 50);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('estado', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
