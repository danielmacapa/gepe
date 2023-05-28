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
            'description' => 'Lutadores ferozes e mestres no combate corpo-a-corpo',
            'talent_name' => 'Caminho da Lâmina',
            'talent_description' => 'Causa 1 ponto a mais de dano em ataques com espadas e machados',
            'equipment' => 'Espada longa e cota de malha'
        ]);
        DB::table('professions')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Mago',
            'description' => 'Estudante do oculto e conhecedor de magias arcanas poderosas e perigosas',
            'talent_name' => 'Caminho do Fogo',
            'talent_description' => 'Acesso a magias da Disciplina Ignis',
            'equipment' => 'Adaga e grimório'
        ]);
        DB::table('professions')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Caçador',
            'description' => 'Especialista em armas à distância como arcos e bestas',
            'talent_name' => 'Caminho da Flecha',
            'talent_description' => 'Bônus de 2 dados no teste de Ataque usando arcos e bestas',
            'equipment' => 'Arco curto e armadura de couro'
        ]);
        DB::table('professions')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Druida',
            'description' => 'Protetor da natureza e estudioso de magias benéficas',
            'talent_name' => 'Caminho da Cura',
            'talent_description' => 'Acesso a magias da Disciplina Cura',
            'equipment' => 'Bastão e símbolo sagrado'
        ]);
        DB::table('professions')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Ladino',
            'description' => 'Sutil e perigoso, prefere emboscadas que confrontos diretos',
            'talent_name' => 'Caminho do Matador',
            'talent_description' => 'Causa 1 ponto a mais de dano em ataques furtivos',
            'equipment' => 'Espada curta e gazuas'
        ]);



        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Humanos',
            'description' => 'São numerosos, estão por toda parte e conseguem se adaptar a todo tipo de clima e situação',
            'talent_name' => 'Adaptável',
            'talent_description' => 'Pode testar um atributo no lugar de outro'

        ]);
        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Orcs',
            'description' => 'São cautelosos, resistentes e violentos com quem os ameaça',
            'talent_name' => 'Imbatível',
            'talent_description' => 'Quando Força chega em 0, imediatamante recupera 1 ponto'

        ]);
        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Elfos',
            'description' => 'Seres imortais, dotados de uma visão peculiar sobre o mundo',
            'talent_name' => 'Memória Ancestral',
            'talent_description' => 'Bônus de 2 dados em testes de Astúcia'

        ]);
        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Anões',
            'description' => 'Construtores e artesãos, moldam o mundo a sua vontade',
            'talent_name' => 'Teimosia',
            'talent_description' => 'Pode rolar de novo um teste falho'

        ]);
        DB::table('races')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Halflingd',
            'description' => 'Pacíficos e curiosos, são pequenos e furtivos',
            'talent_name' => 'Esquivo',
            'talent_description' => 'Bônus de 2 dados no teste de Defesa usando Agilidade'

        ]);

    }
}