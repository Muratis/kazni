<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::enableForeignKeyConstraints();
//        Schema::create('text', function (Blueprint $table) {
//            $table->increments('text_id');
////            $table->integer('text_id')->unsigned();
//            $table->text('text');
//            $table->timestamps();
//            $table->engine = 'InnoDB';
//        });
//        Schema::table('text', function ( Blueprint $table) {
//            $table->onDelete('cascade')->onUpdate('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('text');
    }
}
