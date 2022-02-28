<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVimbisoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vimbiso_users', function (Blueprint $table) {
             $table->id();
             $table->string("password")->nullable();
             $table->string("last_login")->nullable();
             $table->string("is_superuser")->nullable();
             $table->string("groups")->nullable();
             $table->string("user_permissions")->nullable();
             $table->string("username")->nullable();
             $table->text("first_name")->nullable();
             $table->string("last_name")->nullable();
             $table->string("email")->nullable();
             $table->string("is_staff")->nullable();
             $table->text("is_active")->nullable();
             $table->string("date_joined")->nullable();
             $table->string("company_name")->nullable();
             $table->string("country")->nullable();
             $table->string("city")->nullable();
             $table->string("block")->nullable();
             $table->string("contact")->nullable();
             $table->string("level")->nullable();
             
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vimbiso_users');
    }
}
