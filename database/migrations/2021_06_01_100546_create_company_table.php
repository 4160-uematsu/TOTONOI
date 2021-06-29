<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('company', function (Blueprint $table) {
                    $table->id();
                    $table->unsignedBigInteger('author_id');
                    $table->string("title");	//タイトル
                    $table->string("author");	//投稿者名
                    $table->text('image_path'); //写真のパス
                    $table->string("body");	//コメント
                    $table->foreign('author_id')->references('id')->on('users');
                    $table->timestamps();
                    $table->softDeletes();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
