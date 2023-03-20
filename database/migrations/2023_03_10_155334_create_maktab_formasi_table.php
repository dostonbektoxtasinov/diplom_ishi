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
        Schema::create('maktab_formasi', function (Blueprint $table) {
            $table->id();
            $table->string('yigitlar', 255);
            $table->string('qizlar', 255);
            $table->string('umumiy_bir', 255);
            $table->string('umumiy_ikki', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maktab_formasi');
    }
};
