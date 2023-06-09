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
        Schema::create('kegiatan_masjids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masjid_id');
            $table->string('nama_kegiatan');
            $table->string('jenis_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->time('Waktu');
            $table->binary('Poster_image')->nullable();
            $table->timestamps();

            $table->foreign('masjid_id')->references('id')->on('data_masjids')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan_masjids');
    }
};
