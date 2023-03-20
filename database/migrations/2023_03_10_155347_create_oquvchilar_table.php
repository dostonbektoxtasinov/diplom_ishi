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
        Schema::create('oquvchilar', function (Blueprint $table) {
            $table->id();
            $table->string('umumiy', 11);
            $table->string('bolalar', 11);
            $table->string('qizlar', 11);
            $table->string('rasm', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oquvchilar');
    }
};
