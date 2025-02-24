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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id(); // Kolom ID (primary key)
            $table->string('name'); // Nama dokter
            $table->string('nip')->unique(); // NIP dokter (unik)
            $table->string('specialization'); // Spesialisasi dokter
            $table->string('phone'); // Nomor telepon dokter
            $table->string('image')->nullable(); // Gambar dokter (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
