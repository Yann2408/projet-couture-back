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
        Schema::create('projet_tissu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->constrained('projets');
            $table->foreignId('tissu_id')->constrained('tissus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet_tissu');
    }
};
