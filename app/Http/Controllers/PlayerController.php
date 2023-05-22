<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    //

    public function list()
    {
        $players = User::all();
        return view('player/list', compact('players'));
    }
    public function show($uuid)
    {
        $player = User::where('uuid', $uuid)->first();
        return view('player/show', compact('player'));
    }
    // public function create()
    // {
    //     return view('player/create');
    // }
    // public function store(Request $request)
    // {
    //     // regras de validação (precisa pedir para mostrar o erro, está no master template)
    //     $request->validate([
    //         'name' => 'required|string|max:50|unique:players,name',
    //         'slug' => 'required|string|max:10|unique:players,slug',
    //         'email' => 'required|email|unique:players,email'
    //     ]);

    //     $player = User::create([
    //         'uuid' => Str::uuid(),
    //         'name' => $request->name,
    //         'slug' => $request->slug,
    //         'email'=> $request->email,
    //         'password'=>$request->password
    //     ]);
    //     return redirect()->route('player.list')->with('success', 'Jogador cadastrado com sucesso!');
    //     // with: mensagem;
    // }

    public function update($uuid)
    {
        $player = User::where('uuid', $uuid)->first();
        return view('player/update', compact('player'));
    }

    public function put(Request $request)
    {
        $player = User::where('uuid', $request->uuid)->first();

        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email'
        ]);

        $player->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password
        ]);

        return redirect()->route('player.list')->with('success', 'Jogador atualizado com sucesso!');
    }

    public function delete($uuid)
    {
        $player = User::where('uuid', $uuid)->first();
        return view('player/delete', compact('player'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $player = User::where('uuid', $request->uuid)->first();
        $player->delete();
        return redirect()->route('player.list')->with('success', 'Jogador removido com sucesso!');
    }

}