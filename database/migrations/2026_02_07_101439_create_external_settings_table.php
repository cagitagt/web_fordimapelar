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
        Schema::create('external_settings', function (Blueprint $table) {
            $table->id();
            $table->string('invitation_url')->nullable();
            $table->string('contact1_name')->nullable();
            $table->string('contact2_name')->nullable();
            $table->string('contact1_link')->nullable();
            $table->string('contact2_link')->nullable();
            $table->string('internal_terms_url')->nullable();
            $table->string('external_terms_url')->nullable();
            $table->string('terms_form_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_settings');
    }
};
