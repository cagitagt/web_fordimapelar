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
        Schema::create('about_cabinets', function (Blueprint $table) {
            $table->id();
            $table->string('cabinet_name');
            $table->string('cabinet_year');
            $table->string('cabinet_ebook')->nullable();
            $table->string('cabinet_visual')->nullable();
            $table->string('company_profile_link')->nullable();
            $table->longText('cabinet_narrative');
            $table->string('chairman_name');
            $table->string('chairman_photo');
            $table->longText('chairman_narrative');
            $table->longText('cabinet_vision');
            $table->longText('cabinet_mission');
            $table->string('cabinet_structure_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_cabinets');
    }
};
