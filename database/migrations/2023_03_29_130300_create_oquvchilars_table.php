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
            $table->string('rasm')->nullable();
            $table->string('ism_fam', 100);
            $table->string('sinfi', 100);
            $table->string('jinsi', 100);
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
