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
        Schema::create('kpi_result', function (Blueprint $table) {
            $table->id('id_kpi');
            $table->unsignedBigInteger('id_user');
            $table->integer('bulan');
            $table->year('tahun');
            $table->decimal('skor_kehilangan', 8, 2)->default(0.00);
            $table->decimal('skor_kerusakan', 8, 2)->default(0.00);
            $table->decimal('skor_tepatwaktu', 8, 2)->default(0.00);
            $table->decimal('skor_kejujuran', 8, 2)->default(0.00);
            $table->decimal('skor_kepatuhan', 8, 2)->default(0.00);
            $table->decimal('final_skor', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kpi_result');
    }
};
