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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("penulis");
            $table->string("penerbit");
            $table->year("tahun_terbit");
            $table->string("deskripsi");
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('gambar');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
