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
        Schema::create('oqituvchi', function (Blueprint $table) {
            $table->id();
            $table->string('rasm', 255);
            $table->string('ism', 50);
            $table->string('fan', 100);
            $table->string('telegram', 255);
            $table->string('facebook', 255);
            $table->string('instagram', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oqituvchi');
    }
};
