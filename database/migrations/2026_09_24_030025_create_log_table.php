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
        Schema::create('log', function (Blueprint $table) {
            $table->id('id_log');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_tool');
            $table->unsignedBigInteger('kd_project')->nullable();
            $table->date('tgl_ambil')->nullable();
            $table->date('tgl_kembali')->nullable();
            $table->date('estimasi_pengembalian')->nullable();
            $table->string('kondisi_kembali')->nullable();
            $table->string('status_log')->nullable();
            $table->string('diapprove_oleh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log');
    }
};
