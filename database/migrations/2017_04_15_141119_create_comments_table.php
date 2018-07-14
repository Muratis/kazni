<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('post_id')->unsigned();
            $table->text('name_users');
            $table->text('text_comment');
            $table->boolean('seen')->default(0);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::table('comments', function ($table) {
            $table->foreign('post_id')->references('post_id')->on('posts')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('comments', function ($table) {
            $table->dropForeign(['post_id']);
        });
            
        Schema::drop('comments');
    }
}
