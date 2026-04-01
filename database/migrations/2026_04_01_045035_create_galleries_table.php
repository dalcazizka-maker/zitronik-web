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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nadpis (např. "Instalace antény")
            $table->text('description')->nullable(); // Delší popis (může být prázdný)
            $table->string('image_path'); // Cesta, kde je fotka fyzicky uložená
            $table->string('category')->nullable(); // Kategorie (např. "Jablotron", "Antény")
            $table->boolean('is_visible')->default(true); // Zda se má fotka ukazovat na webu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
