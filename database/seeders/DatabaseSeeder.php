<?php

namespace Database\Seeders;

use App\Models\Reader;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'user_name_first' => 'First',
            'user_name_last' => 'Last',
            'cell_phone' => '+254702681502',
            'email' => 'test@example.com',
        ]);
    }
}
