<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToCompanyinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companyinfo', function (Blueprint $table) {
            //
            $table->string('title');  //アクセスの追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companyinfo', function (Blueprint $table) {
            //
            $table->dropColumn('title');  //アクセスの削除
        });
    }
}
