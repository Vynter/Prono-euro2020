<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pronostic::factory(3)->create();
        //\App\Models\typeMatchesFactory::factory(5)->create();
        //\App\Models\User::factory(3)->create();
        //\App\Models\article::factory(2)->create();
        //\App\Models\Groupe::factory(4)->create();
        //\App\Models\Equipe::factory(16)->create();
        //\App\Models\Matche::factory(8)->create();
        //\App\Models\EquipeMatche::factory(5)->create();
    }
}