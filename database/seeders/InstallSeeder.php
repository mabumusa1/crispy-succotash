<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Install::factory()->course()->create();
        \App\Models\Install::factory()->demo()->create();
        \App\Models\Install::factory()->dev()->create();
        \App\Models\Install::factory()->prod()->create();

    }
}
