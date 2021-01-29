<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kos_id');
            $table->string('nama', 100);
            $table->integer('kapasitas');
            $table->integer('harga');
            $table->enum('pembayaran', ['perhari', 'perminggu', 'perbulan']);
            $table->string('gambar', 255)->default('default.jpg');
            $table->timestamps();

            $table->foreign('kos_id')->references('id')
                    ->on('kos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
}
