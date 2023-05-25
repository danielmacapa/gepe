<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        return view('user/list', compact('users'));
    }
    public function show($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return view('user/show', compact('user'));
    }
    public function create()
    {
        return view('user/create');
    }
    public function store(Request $request)
    {
        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required|string|max:50|unique:users,name',
            'email' => 'required|email'
        ]);

        $user = User::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password

        ]);

        return redirect()->route('user.list')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function update($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return view('user/update', compact('user'));
    }

    public function put(Request $request)
    {
        $user = User::where('uuid', $request->uuid)->first();

        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
        ]);

        $user->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password
        ]);

        return redirect()->route('user.list')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function delete($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return view('user/delete', compact('user'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $user = User::where('uuid', $request->uuid)->first();
        $user->delete();
        return redirect()->route('user.list')->with('success', 'Usuário removido com sucesso!');
    }

}