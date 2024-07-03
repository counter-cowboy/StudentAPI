<?php

namespace Database\Seeders;

use App\Models\Lection;
use Illuminate\Database\Seeder;

class LectionSeeder extends Seeder
{
    public function run(): void
    {
        Lection::factory(10)->create();
    }
}
