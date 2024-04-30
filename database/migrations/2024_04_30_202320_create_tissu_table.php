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
        Schema::create('tissus', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('poids');
            $table->integer('laize');
            $table->integer('prix');
            $table->integer('stock');
            $table->string('provenance');
            $table->boolean('prelave');
            $table->boolean('oekotex');
            $table->boolean('bio');
            $table->integer('note');
            $table->text('commentaire')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tissu_type_id')->constrained('tissu_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tissus');
    }
};
