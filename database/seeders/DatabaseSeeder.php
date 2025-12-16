<?php

namespace Database\Seeders;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        Teacher::factory(10)->create();
        Student::factory(90)->create();
        Classes::factory(8)->create();
        Subject::factory(12)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
