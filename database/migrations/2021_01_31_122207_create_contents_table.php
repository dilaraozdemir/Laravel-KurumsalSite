<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('contents');
        Schema::create('contents', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('keywords' )->nullable();;
            $table->string('description' )->nullable();;
            $table->string('image' )->nullable();;
            $table->text('detail' )->nullable();;
            $table->integer('menu_id' )->nullable();;
            $table->integer('bos' )->nullable();;
            $table->string('type' )->nullable();;
            $table->integer('user_id' )->nullable();;
            $table->string('status',5 )->nullable()->default('False');
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
        Schema::dropIfExists('contents');
    }
}
