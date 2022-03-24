<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            

            $table->id();
            $table->string("name");
            $table->string("contact")->nullable();
            $table->string("purchaseditem")->nullable();
            $table->string("itemcounter")->nullable();
            $table->string("dateofpurchase")->nullable();
            $table->string("branchlocation")->nullable();
            $table->text("review");
            $table->Integer("ratings")->nullable();
            $table->string("typeofpurchase")->nullable();
            $table->string("resolved")->nullable();
            $table->text("response")->nullable();
            $table->string("isresolved")->nullable();
            $table->string("whatsappreview")->nullable();
            $table->bigInteger('company_id')->nullable();
            $table->string("unlistedcompany")->nullable();
            $table->string("show")->nullable();
            // $table->foreign('company_id')->references('id')->on('companytbs');
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
        Schema::dropIfExists('reviews');
    }
}



