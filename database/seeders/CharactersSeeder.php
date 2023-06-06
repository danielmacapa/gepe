<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CharactersSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions

        DB::table('characters')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Mao',
            'race_id' => '1',
            'profession_id' => '1',
            'user_id' => '4',
            'strenght' => '2',
            'agility' => '2',
            'wits' => '2',
            'empathy' => '2',
            'level' => '1',
            'active' => '1'
        ]);

        DB::table('characters')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Tsé',
            'race_id' => '2',
            'profession_id' => '1',
            'user_id' => '4',
            'strenght' => '3',
            'agility' => '3',
            'wits' => '2',
            'empathy' => '3',
            'level' => '1',
            'active' => '1'
        ]);
        DB::table('characters')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Tung',
            'race_id' => '3',
            'profession_id' => '2',
            'user_id' => '4',
            'strenght' => '2',
            'agility' => '3',
            'wits' => '2',
            'empathy' => '3',
            'level' => '1',
            'active' => '1'
        ]);
        DB::table('characters')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Baikal',
            'race_id' => '1',
            'profession_id' => '4',
            'user_id' => '5',
            'strenght' => '2',
            'agility' => '2',
            'wits' => '4',
            'empathy' => '2',
            'level' => '1',
            'active' => '0'
        ]);
        DB::table('characters')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Adonias',
            'race_id' => '4',
            'profession_id' => '5',
            'user_id' => '3',
            'strenght' => '4',
            'agility' => '4',
            'wits' => '2',
            'empathy' => '2',
            'level' => '1',
            'active' => '1'
        ]);
        DB::table('characters')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Tiferina',
            'race_id' => '2',
            'profession_id' => '3',
            'user_id' => '4',
            'strenght' => '4',
            'agility' => '3',
            'wits' => '2',
            'empathy' => '2',
            'level' => '1',
            'active' => '1'
        ]);



    }
}
