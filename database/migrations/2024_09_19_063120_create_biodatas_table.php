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
        // menambahkan tabel biodata
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Menggunakan tipe string (VARCHAR)
            $table->text('keterangan'); // Menggunakan tipe text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
