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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->year('tahun'); // Kolom untuk tahun
            $table->string('sekolah'); // Kolom untuk nama sekolah
            $table->string('jurusan'); // Kolom untuk jurusan
            $table->decimal('ipk', 3, 2); // Kolom untuk IPK (misal 4.00)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
