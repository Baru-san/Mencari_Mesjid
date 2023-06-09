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
        Schema::create('data_masjids', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('alamat')->nullable();
            $table->binary('Mosque_image')->nullable();
            $table->string('Mosque_image_url')->nullable();
            $table->string('PenanggungJawab1')->nullable();
            $table->string('PenanggungJawab2')->nullable();
            $table->string('PenanggungJawab3')->nullable();
            $table->string('negara')->nullable();
            $table->longText('History')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_masjids');
    }
};
