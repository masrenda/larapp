<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('excerpt'); // excerpt = kutipan
            $table->text('body');
            $table->timestamp('publish_at')->nullable(); // Timestamp() adalah fungsi yang dapat digunakan dalam Laravel untuk menambahkan kolom timestamp otomatis ke tabel database. Kolom ini akan menyimpan tanggal dan waktu saat baris data tersebut dibuat atau diupdate. 
            $table->timestamps(); // Timestamps() adalah sebuah fungsi yang digunakan untuk menambahkan kedua kolom timestamp (created_at dan updated_at) secara otomatis ke tabel database. Kedua fungsi ini biasanya digunakan bersama-sama untuk memudahkan pengelolaan tanggal dan waktu pada database.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
