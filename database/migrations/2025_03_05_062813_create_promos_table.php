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
        Schema::create('promos', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('promoName'); // Kolom untuk nama promo
            $table->string('gambar')->nullable(); // Kolom untuk gambar promo (bisa null)
            $table->text('desc_promo')->nullable(); // Kolom untuk deskripsi promo (bisa null)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
