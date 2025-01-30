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
        Schema::create('gambar_kamars', function (Blueprint $table) {
            $table->id('id_gambar');
            $table->foreignId('id_kamar')->constrained('kamars', 'id_kamar')->onDelete('cascade');
            $table->string('nama_file');
            $table->integer('urutan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_kamars');
    }
};
