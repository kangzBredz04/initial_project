<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    /**
     * Fungsi ini digunakan untuk membuat perubahan pada skema database. 
     * Saat migrasi dijalankan, fungsi up() akan dijalankan terlebih dahulu. 
     * Berikut beberapa contoh yang bisa dilakukan dalam fungsi up():
     *      Membuat tabel baru
     *      Menambahkan kolom baru ke tabel yang ada
     *      Mengubah tipe data kolom
     *      Menghapus kolom
     *      Membuat foreign key
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('author');
            $table->string('publication');
            $table->unsignedInteger('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    /**
     * Fungsi ini digunakan untuk membalikkan perubahan yang dilakukan pada fungsi up(). 
     * Ketika migrasi dibatalkan (rollback), fungsi down() akan dijalankan. 
     * Berikut beberapa contoh yang bisa dilakukan dalam fungsi down():
     *      Menghapus tabel
     *      Menghapus kolom
     *      Mengubah tipe data kolom
     *      Menghapus foreign key
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
