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
        Schema::create('shalat_khususes', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_shalat');
            $table->string('imam');
            $table->string('muazzin');
            $table->string('khatib')->nullable();
            $table->unsignedBigInteger('masjid_id');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('masjid_id')->references('id')->on('data_masjids')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shalat_khususes');
    }
};
