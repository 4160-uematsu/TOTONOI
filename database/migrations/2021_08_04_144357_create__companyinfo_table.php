<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyinfo', function (Blueprint $table) {
        $table->id();
        $table->string("name");	//会社名
        $table->string("time");	//営業時間
        $table->text('photo'); //会社紹介の写真
        $table->string("promotion");//宣伝
        $table->string("address");//住所
        $table->string("riyu1");//露天風呂
        $table->string("riyu2");//サウナ
        $table->string("riyu3");//電気風呂
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
        Schema::dropIfExists('companyinfo');
    }
}
