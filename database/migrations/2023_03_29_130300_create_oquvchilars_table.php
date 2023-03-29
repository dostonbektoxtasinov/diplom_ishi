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
        Schema::create('oquvchilars', function (Blueprint $table) {
            $table->id();
            $table->string('umumiy', 100);
            $table->string('qizlar', 100);
            $table->string('yigitlar', 100);
            $table->string('rasm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oquvchilars');
    }
};
