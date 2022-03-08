<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanytbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companytbs', function (Blueprint $table) {
            $table->id(); 
            $table->string("user_id")->unique();         
            $table->string("company")->unique();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("block")->nullable();
            $table->string("contact")->nullable();
            $table->string("category")->nullable();
            $table->string("subcategory")->nullable();
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
        Schema::dropIfExists('companytbs');
    }
}
