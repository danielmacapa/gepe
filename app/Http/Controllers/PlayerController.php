<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    //

    public function list()
    {
        $players = Player::all();
        return view('player/list', compact('players'));
    }
    public function show($uuid)
    {
        $player = Player::where('uuid', $uuid)->first();
        return view('player/show', compact('player'));
    }
    public function create()
    {
        return view('player/create');
    }
    public function store(Request $request)
    {
        $player = Player::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password,
            'slug' => $request->slug
        ]);
        return redirect()->route('player.list');
    }

    public function update($uuid)
    {
        $player = Player::where('uuid', $uuid)->first();
        return view('player/update', compact('player'));
    }

    public function put(Request $request)
    {
        $player = Player::where('uuid', $request->uuid)->first();

        $player->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password,
            'slug' => $request->slug
        ]);

        return redirect()->route('player.list');
    }

    public function delete($uuid)
    {
        $player = Player::where('uuid', $uuid)->first();
        return view('player/delete', compact('player'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $player = Player::where('uuid', $request->uuid)->first();
        $player->delete();
        return redirect()->route('player.list');
    }

}
