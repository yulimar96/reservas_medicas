<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('federals_state', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('iso_3166-2');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('federals_state');
    }
};
