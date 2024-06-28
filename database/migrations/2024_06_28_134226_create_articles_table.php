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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->nullable()->constrained('categories'); // clé étrangère auto-référencée (si nécessaire)
            $table->string('nom');
            $table->string('surnoms')->nullable();
            $table->decimal('prix', 10, 2); // Exemple de champ pour le prix
            $table->string('couleurs')->nullable();
            $table->string('taille_format')->nullable();
            $table->integer('en_stock')->default(0);
            $table->text('description')->nullable();
            $table->json('images')->nullable(); // Stockage JSON des chemins d'images
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
