<?php

namespace Database\Seeders;

use App\Models\Deadline;
use App\Models\Expense;
use App\Models\ExtraIncome;
use App\Models\Payroll;
use App\Models\Saving;
use App\Models\TargetBalance;
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

        Deadline::factory()->create([
            'deadline' => '2028-01-01',
            'user_id' => 1,
        ]);

        Expense::factory()->create([
            'name' => 'Gasto',
            'description' => 'Gastos de la semana',
            'amount' => 100.00,
            'user_id' => 1,
        ]);

        ExtraIncome::factory()->create([
            'name' => 'Ingreso',
            'description' => 'Ingreso de hostelería',
            'amount' => 200.00,
            'user_id' => 1,
        ]);

        Payroll::factory()->create([
            'name' => 'Nómina',
            'amount' => 2000.00,
            'user_id' => 1,
        ]);

        Saving::factory()->create([
            'amount' => 10200.00,
            'user_id' => 1,
        ]);

        TargetBalance::factory()->create([
            'target_balance' => 35000.00,
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
