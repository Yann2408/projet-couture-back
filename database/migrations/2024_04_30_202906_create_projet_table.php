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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('statut', ['en_attente', 'en_cours', 'terminé']);
            $table->integer('taille');
            $table->string('destinataire')->nullable();
            $table->string('fil');
            $table->string('aiguille');
            $table->string('point');
            $table->text('commentaire')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('patron_id')->constrained('patrons');
            $table->foreignId('mensuration_id')->constrained('mensurations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
