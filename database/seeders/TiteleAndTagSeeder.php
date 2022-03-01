<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiteleAndTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('titetle_and_tags')->insert([
            'title' => 'Vimbiso',
            'tags' => 'Vimbiso',
            'deteles' => 'Vimbiso - A free, independent & Transparent customer assurance platform. Giving consumers a powerful voice to enable business to listen, respond and improve',
            
        ]);
    }
}
