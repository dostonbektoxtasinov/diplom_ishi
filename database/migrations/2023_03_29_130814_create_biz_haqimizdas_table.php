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
        Schema::create('biz-haqimizdas', function (Blueprint $table) {
            $table->id();
            $table->string('dars_ertalab');
            $table->string('dars_kech');
            $table->string('lokatsiya');
            $table->string('nomer');
            $table->string('email');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('watsapp');
            $table->string('facebook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biz-haqimizdas');
    }
};
