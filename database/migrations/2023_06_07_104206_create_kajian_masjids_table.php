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
        Schema::create('kajian_masjids', function (Blueprint $table) {
            $table->id();
            $table->string('Tema');
            $table->string('Penceramah');
            $table->date('Jadwal');
            $table->time('Waktu');
            $table->unsignedBigInteger('masjid_id');
            $table->timestamps();

            $table->foreign('masjid_id')->references('id')->on('data_masjids')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kajian_masjids');
    }
};
