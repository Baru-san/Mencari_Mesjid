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
        Schema::create('ziswaf_masjids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masjid_id');
            $table->enum('jenis_ziswaf', ['zakat', 'infaq', 'sedekah', 'wakaf'])->default('zakat');
            $table->date('tanggal_ziswaf');
            $table->integer('jumlah_ziswaf');
            $table->timestamps();


            $table->foreign('masjid_id')->references('id')->on('data_masjids')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ziswaf_masjids');
    }
};
