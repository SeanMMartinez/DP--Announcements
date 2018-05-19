<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('announcements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('announcement_title');
            $table->unsignedInteger('user_id');
           // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        Schema::table('announcements', function($table)
{
    $table->foreign('user_id')
        ->references('id')->on('users'); 
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
