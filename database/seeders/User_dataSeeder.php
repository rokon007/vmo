<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User_dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void          
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Super Admin',
            'email' => 'rokon07@hotmail.com',
            'password' => Hash::make('rokon007'),
            'is_superuser' => '1',
            'company_name' => 'Admin',
            'contact' => '+8801717524792',
            
            
        ]);
    }
}
