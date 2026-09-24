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
        Schema::create('tools', function (Blueprint $table) {
            $table->id('id_tool');
            $table->string('kode_tool')->unique();
            $table->string('nama_tool');
            $table->date('tanggal_beli')->nullable();
            $table->decimal('harga_beli', 15, 2)->default(0.00);
            $table->integer('usia_tool')->nullable();
            $table->string('lokasi_tool')->nullable();
            $table->string('kondisi_tool')->nullable();
            $table->string('status_ketersediaan')->nullable();
            $table->string('foto_tool')->nullable();
            $table->boolean('butuh_approval')->default(0);
            $table->decimal('nilai_ekonomis', 15, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
