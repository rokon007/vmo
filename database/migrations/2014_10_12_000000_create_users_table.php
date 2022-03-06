<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
             $table->id();
            $table->string('password')->nullable();
            $table->string('last_login')->nullable();
            $table->string('is_superuser')->nullable();
            $table->string('groups')->nullable();
            $table->string('user_permissions')->nullable();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('is_staff')->nullable();
            $table->string('is_active')->nullable();
            $table->timestamp('date_joined')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('block')->nullable();
            $table->string('contact')->nullable();
            $table->string('level')->nullable();
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
        Schema::dropIfExists('users');
    }
}
