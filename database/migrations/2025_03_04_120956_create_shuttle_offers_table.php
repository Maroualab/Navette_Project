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
        Schema::create('shuttle_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('depart');
            $table->string('arrivee');
            $table->time('heure_depart');
            $table->time('heure_arrivee');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('available_places');
            $table->text('description');
            $table->json('equipements')->nullable(); // Stores checkboxes as JSON
            $table->boolean('is_open')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shuttle_offers');
    }
};
