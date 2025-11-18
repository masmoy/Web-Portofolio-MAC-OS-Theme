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
    Schema::create('projects', function (Blueprint $table) {
        $table->id(); // Kolom 'id' (angka unik)
        $table->string('title'); // Kolom 'title' (untuk judul proyek, teks singkat)
        $table->text('description'); // Kolom 'description' (untuk deskripsi, teks panjang)
        $table->integer('year'); // Kolom 'year' (untuk tahun, angka)
        $table->timestamps(); // Kolom 'created_at' dan 'updated_at' (otomatis)
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
