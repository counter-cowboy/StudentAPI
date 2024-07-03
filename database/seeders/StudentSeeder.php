<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        echo 'aaaaaaa';
        Student::factory(10)->create();
    }
}
