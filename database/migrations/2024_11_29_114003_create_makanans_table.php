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
        Schema::create('makanan', function (Blueprint $table) {
            $table->id();
            $table->string('makanan');
            $table->integer('harga');
            $table->string('image'); // Menggunakan tipe string untuk path gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan'); // Nama tabel disamakan
    }
};
