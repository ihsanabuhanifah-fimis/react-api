<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populers', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('populer_jumlah');
            $table->string('populer_name');
            $table->integer('populer_harga');
            $table->string('populer_waktu');
            $table->char('populer_rating');
            $table->string('populer_img');
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
        Schema::dropIfExists('populers');
    }
}
