<?php

namespace Database\Seeders;

use App\Models\Payroll;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rafael A. Ortega',
            'email' => 'raortega8906@gmail.com',
            'password' => Hash::make('laravel2024.'),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        Payroll::factory()->create([
            'name' => 'Nómina',
            'amount' => 1390.00,
            'user_id' => 1,
        ]);

        // Comentar usuario tester hasta que se agregue el panel de administración
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('test'),
        // ]);
    }
}
