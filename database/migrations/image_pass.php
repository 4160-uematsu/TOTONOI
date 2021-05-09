<?php
class AddImagePathToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->id();
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('image_path')->after('email_verified_at');
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
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('image_path')->after('email_verified_at');
            $table->timestamps();
        });
    }
}