<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->unique();
            $table->string('email')->nullable();
            $table->longText('description')->nullable();
            $table->string('verified')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('business_profiles');
    }
}
