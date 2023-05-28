<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CampaignsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions

        DB::table('campaigns')->insert([
            'uuid' => Str::uuid(),
            'user_id' => '2',
            'name' => 'Deserto da Morte',
            'resume' => 'Aventuras nas areias escaldantes',
            'description' => ''
        ]);
    }
}