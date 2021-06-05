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
        \App\Models\User::factory(10)->create();
        \App\Models\article::factory(10)->create();
        \App\Models\Groupe::factory(6)->create();
        \App\Models\Equipe::factory(6)->create();
    }
}