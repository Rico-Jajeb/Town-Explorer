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
        Schema::create('generalSettings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('system_name');
            $table->string('system_tagline');
            $table->string('system_logo');
            $table->string('system_favicon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generalSettings');
    }
};
