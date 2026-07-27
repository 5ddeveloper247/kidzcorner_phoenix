<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
      User::create([
    'name' => 'Super Admin',
    'email' => 'admin@gmai.com',
    'password' => Hash::make('Password@123'),
    'status' => 1,
    'company_id' => 1,
    'role_id' => 1,
]);
    }
}