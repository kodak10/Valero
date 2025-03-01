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
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('status', ['published', 'draft', 'inactive'])->default('published');
            $table->decimal('quantite', 8, 2)->default(1);
            $table->string('couverture')->default('images/default.jpg');
            $table->string('slug')->unique();
            $table->boolean('second_mains')->default(false); // 0 estseconde mains; 1 est neuf --- 

            $table->boolean('is_promotion')->default(false);
            $table->enum('promotion_type', ['none', 'percentage', 'fixed'])->default('none'); 
            $table->decimal('promotion_value', 8, 2)->nullable(); 
            $table->date('promotion_start')->nullable();
            $table->date('promotion_end')->nullable();

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
