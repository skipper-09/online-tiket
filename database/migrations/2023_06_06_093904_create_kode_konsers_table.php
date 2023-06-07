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
        Schema::create('kode_konsers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pemesan')->constrained('pemesan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode');
            $table->boolean('digunakan')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kode_konsers');
    }
};
