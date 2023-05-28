<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ProfessionsAndRacesSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions

        DB::table('professions')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Guerreiro',
            'description' => 'Especialista em combate corpo-a-corpo',
            'talent_name' => 'Caminho da Lâmina',
            'talent_description' => 'Ganha +1 no ataque com lâminas',
            'equipment' => 'espada longa e escudo'
        ]);
        DB::table('professions')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Mago',
            'description' => 'Estudante do oculto',
            'talent_name' => 'Caminho do Fogo',
            'talent_description' => '',
            'equipment' => 'cajado e grimório'
        ]);

        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Humano',
            'description' => 'Numerosos e espalahdos por todas as regiões',
            'talent_name' => 'Adaptável',
            'talent_description' => 'Pode testar um atributo no lugar de outro'

        ]);
        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Orc',
            'description' => 'Fortes e resistentes',
            'talent_name' => 'Imbatível',
            'talent_description' => 'Recupera 1 ponto de Força quando chegar em 0'

        ]);
    }
}