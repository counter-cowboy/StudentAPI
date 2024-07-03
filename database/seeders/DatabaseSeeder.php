<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Lection;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
      Group::factory(5)->create();
//      Lection::factory(10)->create();
      Student::factory(30)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
