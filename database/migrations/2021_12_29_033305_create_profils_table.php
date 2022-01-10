<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pekerjaan_utama');
            $table->string('pekerjaan_sampingan');
            $table->text('tentang_saya');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('alamat');
            $table->string('pesan_singkat');
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
        Schema::dropIfExists('profils');
    }
}
