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
        Schema::create('tool_incident', function (Blueprint $table) {
            $table->id('id_incident');
            $table->unsignedBigInteger('id_log')->nullable();
            $table->unsignedBigInteger('id_tool');
            $table->string('jenis_incident')->nullable();
            $table->text('kronologi')->nullable();
            $table->string('status_perbaikan')->nullable();
            $table->date('tgl_incident')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tool_incident');
    }
};
