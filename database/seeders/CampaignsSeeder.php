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
            'description' => 'Você foi contratado para escoltar um grupo de arqueólogos até uma misteriosa pirâmide descoberta no meio do deserto.'
        ]);
        DB::table('campaigns')->insert([
            'uuid' => Str::uuid(),
            'user_id' => '2',
            'name' => 'Marte Ataca',
            'resume' => 'A Terra sofre uma invasão alienígena',
            'description' => 'Subitamente, as principais cidades da Terra são atacadas por naves imensas de origem extraterrestre.'
        ]);
        DB::table('campaigns')->insert([
            'uuid' => Str::uuid(),
            'user_id' => '3',
            'name' => 'O Rei de Amarelo',
            'resume' => 'Uma figura sinistra atormenta os sonhos de um artista.',
            'description' => 'Assombrado por sonhos vívidos e lúcidos, o pintor Thomas Hall afunda em uma espiral de terror e loucura.'
        ]);

    }
}
