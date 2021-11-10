<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10);
            $table->string('judul', 50);
            $table->string('kategori', 10);
            $table->string('gambar');
            $table->string('pengarang', 75);
            $table->string('penerbit', 50);
            $table->date('tgl_terbit');
            $table->text('deskripsi');
            $table->string('stok', 10);
            $table->string('slug');
            $table->string('rak', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
