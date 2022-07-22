<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void post_id
     */
    public function up()
    {
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->string('slug')->nullable();
			$table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->longText('message'); 
            $table->integer('post_id')->unsigned();			
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('post_comments');
    }
}
