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
        Schema::create('offer_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('shuttle_offer_id')->constrained()->onDelete('cascade');
            $table->primary(['user_id', 'shuttle_offer_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
