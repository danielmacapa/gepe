<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Profession;
use App\Models\User;
use App\Models\Character;
use App\Models\Campaign;
use Illuminate\Support\Str;

class CharacterController extends Controller
{
    //
    public function list()
    {
        $characters = Character::all();
        return view('character/list', compact('characters'));
    }
    public function show($uuid)
    {
        $character = Character::where('uuid', $uuid)->first();
        return view('character/show', compact('character'));
    }
    public function create()
    {
        $races = Race::all();
        $professions = Profession::all();
        $users = User::all();
        $campaigns = Campaign::all();
        return view('character/create', compact('races', 'professions', 'campaigns', 'users'));
    }
    public function store(Request $request)
    {
        /* validação dos atributos (12)
        $a = $request->character->strenght;
        $b = $request->character->agility;
        $c = $request->character->wits;
        $d = $request->character->empathy;
        $total = $a + $b + $c + $d;*/

        //valida as informações entradas
        $user = auth()->user();

        $request->validate([
            'name'=> 'required|string|max:50',
            'race_id' => 'required',
            'profession_id' => 'required',
            'user_id' => 'required',
            'strenght' => 'required|numeric|min:2|max:4',
            'agility' => 'required|numeric|min:2|max:4',
            'wits' => 'required|numeric|min:2|max:4',
            'empathy' => 'required|numeric|min:2|max:4',
            'level' => 'numeric|min:1'
        ]);
        $character = Character::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'race_id' => $request->race_id,
            'profession_id' => $request->profession_id,
            'user_id' => $user->id,
            'campaign_id' => $request->campaign_id,
            'strenght' => $request->strenght,
            'agility' => $request->agility,
            'wits' => $request->wits,
            'empathy' => $request->empathy,
            'level' => '1'
        ]);
        return redirect()->route('character.list')->with('success', 'Personagem criado com sucesso!');
    }

    public function update($uuid)
    {
        $races = Race::all();
        $professions = Profession::all();
        $users = User::all();
        $campaings = Campaign::all();
        $character = Character::where('uuid', $uuid)->first();
        return view('character/update', compact('characters', 'races', 'professions', 'campaigns', 'users'));
    }

    public function put(Request $request)
    {
        $character = Character::where('uuid', $request->uuid)->first();

        //valida as informações entradas
        $request->validate([
            'name'=> 'required|string|max:50',
            'race_id' => 'required',
            'profession_id' => 'required',
            'strenght' => 'required|numeric|min:2|max:4',
            'agility' => 'required|numeric|min:2|max:4',
            'wits' => 'required|numeric|min:2|max:4',
            'empathy' => 'required|numeric|min:2|max:4'
        ]);

        $character->update([
            'name' => $request->name,
            'race_id' => $request->race_id,
            'profession_id' => $request->profession_id,
            'campaign_id' => $request->campaign_id,
            'strenght' => $request->strenght,
            'agility' => $request->agility,
            'wits' => $request->wits,
            'empathy' => $request->empathy
        ]);
        return redirect()->route('character.list')->with('success', 'Personagem atualizado com sucesso!');

    }

    public function delete($uuid)
    {
        $character = Character::where('uuid', $uuid)->first();
        return view('character/delete', compact('characters'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $character = Character::where('uuid', $request->uuid)->first();
        $character->delete();
        return redirect()->route('character.list')->with('success', 'Personagem removido com sucesso!');
        ;
    }
}