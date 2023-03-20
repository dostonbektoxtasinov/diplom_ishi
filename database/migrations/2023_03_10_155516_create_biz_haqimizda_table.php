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
        Schema::create('biz_haqimizda', function (Blueprint $table) {
            $table->id();
            $table->string('dars_ertalab', 50);
            $table->string('dars_kech', 50);
            $table->string('lokatsiya', 50);
            $table->string('tel_nomer', 14);
            $table->string('email', 100);
            $table->string('telegram', 100);
            $table->string('instagram', 150);
            $table->string('watsapp', 100);
            $table->string('facebook', 120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biz_haqimizda');
    }
};
