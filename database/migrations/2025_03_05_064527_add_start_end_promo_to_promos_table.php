<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('promos', function (Blueprint $table) {
            $table->dateTime('start_promo')->nullable();
            $table->dateTime('end_promo')->nullable();
        });
    }

    public function down()
    {
        Schema::table('promos', function (Blueprint $table) {
            $table->dropColumn(['start_promo', 'end_promo']);
        });
    }
};
