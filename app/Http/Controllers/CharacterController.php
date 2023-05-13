<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Profession;
use App\Models\Player;
use App\Models\Character;
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
        $players = Player::all();
        return view('character/create', compact('races', 'professions', 'players'));
    }
    public function store(Request $request)
    {
        $character = Character::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'slug' => $request->slug,
            'race_id' => $request->race_id,
            'profession_id' => $request->profession_id,
            'player_id' => $request->player_id,
            'strenght' => $request->strenght,
            'agility' => $request->agility,
            'wits' => $request->wits,
            'empathy' => $request->empathy
        ]);
        return redirect()->route('character.list');
    }

    public function update($uuid)
    {
        $races = Race::all();
        $professions = Profession::all();
        $players = Player::all();
        $character = Character::where('uuid', $uuid)->first();
        return view('character/update', compact('character', 'races', 'professions', 'players'));
    }

    public function put(Request $request)
    {
        $character = Character::where('uuid', $request->uuid)->first();

        $character->update([
            'name' => $request->name,
            'strenght' => $request->strenght,
            'agility' => $request->agility,
            'wits' => $request->wits,
            'empathy' => $request->empathy,
            'race_id' => $request->race_id,
            'profession_id' => $request->profession_id,
            'player_id' => $request->player_id
        ]);
        return redirect()->route('character.list');
    }

    public function delete($uuid)
    {
        $character = Character::where('uuid', $uuid)->first();
        return view('character/delete', compact('character'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $character = Character::where('uuid', $request->uuid)->first();
        $character->delete();
        return redirect()->route('character.list');
    }

}
