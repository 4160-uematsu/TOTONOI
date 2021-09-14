<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyToCompanyusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companyusers', function (Blueprint $table) {
            //
        $table->foreignId('companyinfo_id')->nullable();
        // $table->integer('companyinfo_id')->unsigned()->nullabale();//会社IDの追加   
        // $table->foreign('companyinfo_id')
        // ->references('id')->on('companyinfo')
        // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companyusers', function (Blueprint $table) {
            //
        // $table->dropForeign('companyinfo'); //会社IDの削除
        Schema::dropIfExists('companyusers_companyinfo_id_foreign');

        });
    }
}
