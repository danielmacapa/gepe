<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions

        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@gepe.com',
            'email_verified_at' => now(),
            "password" => Hash::make('12345678'),
            'created_at' => now()
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1
        ]);


        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Jogador01',
            'email' => 'jogador@gepe.com',
            'email_verified_at' => now(),
            "password" => Hash::make('12345678'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Jogador02',
            'email' => 'jogador2@gepe.com',
            'email_verified_at' => now(),
            "password" => Hash::make('12345678'),
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'José',
            'email' => 'jose2@gepe.com',
            'email_verified_at' => now(),
            "password" => Hash::make('12345678'),
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Maria',
            'email' => 'maria@gepe.com',
            'email_verified_at' => now(),
            "password" => Hash::make('12345678'),
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Marcela',
            'email' => 'marcela@gepe.com',
            'email_verified_at' => now(),
            "password" => Hash::make('12345678'),
            'created_at' => now()
        ]);




    }
}
