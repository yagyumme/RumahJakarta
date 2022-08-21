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
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->double('harga');
            $table->string('area');
            $table->string('daerah');
            $table->integer('luastanah');
            $table->integer('luasbangunan');
            $table->integer('jktidur');
            $table->integer('jkmandi');
            $table->integer('jlantai');
            $table->string('hadap')->nullable();
            $table->integer('jcarport')->nullable();
            $table->integer('jgarasi')->nullable();
            $table->string('sertifikat');
            $table->text('deskripsi')->nullable();
            $table->text('excerpt')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
