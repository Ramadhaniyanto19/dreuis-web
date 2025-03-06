<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->string('image')->nullable(false)->change(); // Pastikan kolom tidak boleh null
        });
    }

    public function down()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->string('image')->nullable()->change(); // Kembalikan ke nullable jika rollback
        });
    }
};
