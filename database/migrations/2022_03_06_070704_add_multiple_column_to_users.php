<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->after('id')->nullable();
            $table->timestamp('last_login')->after('password')->nullable();         
            $table->string('is_superuser')->after('last_login')->nullable();
           $table->string('groups')->after('is_superuser')->nullable();
            $table->string('user_permissions')->after('groups')->nullable();          
             $table->string('username')->after('user_permissions')->nullable();
            $table->string('first_name')->after('username')->nullable();
            $table->string('last_name')->after('first_name')->nullable();          
          
            $table->string('email')->unique();
            $table->string('is_staff')->after('email')->nullable();
            $table->string('is_active')->after('is_staff')->nullable();        
           $table->string('date_joined')->after('is_active')->nullable();
             $table->timestamp('company_name')->after('date_joined')->nullable();
             $table->string('country')->after('company_name')->nullable();   
            $table->string('city')->after('country')->nullable();
             $table->string('block')->after('city')->nullable();
            $table->string('contact')->after('block')->nullable();         
            $table->string('level')->after('contact')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
