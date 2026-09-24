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
        Schema::create('riwayat_depresiasi', function (Blueprint $table) {
            $table->id('id_depresiasi');
            $table->unsignedBigInteger('id_tools');
            $table->decimal('nilai_depresiasi', 15, 2)->default(0.00);
            $table->date('periode_bulan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_depresiasi');
    }
};
