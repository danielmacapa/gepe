<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use Illuminate\Support\Str;

class RaceController extends Controller
{
    //

    public function list()
    {
        $races = Race::all();
        return view('race/list', compact('races'));
    }
    public function show($uuid)
    {
        $race = Race::where('uuid', $uuid)->first();
        return view('race/show', compact('race'));
    }
    public function create()
    {
        return view('race/create');
    }
    public function store(Request $request)
    {
        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required|string|max:50|unique:races,name',
            'talent_name' => 'required|string|max:50|unique:races,talent_name'
        ]);

        $race = Race::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'description' => $request->description,
            'talent_name' => $request->talent_name,
            'talent_description' => $request->talent_description

        ]);

        return redirect()->route('race.list')->with('success', 'Ascendência cadastrada com sucesso!');
    }

    public function update($uuid)
    {
        $race = Race::where('uuid', $uuid)->first();
        return view('race/update', compact('race'));
    }

    public function put(Request $request)
    {
        $race = Race::where('uuid', $request->uuid)->first();

        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required|string|max:50|unique:races,name',
            'talent_name' => 'required|string|max:50|unique:races,talent_name'
        ]);

        $race->update([
            'name' => $request->name,
            'description' => $request->description,
            'talent_name' => $request->talent_name,
            'talent_description' => $request->talent_description
        ]);

        return redirect()->route('race.list')->with('success', 'Ascendência atualizada com sucesso!');
    }

    public function delete($uuid)
    {
        $race = Race::where('uuid', $uuid)->first();
        return view('race/delete', compact('race'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $race = Race::where('uuid', $request->uuid)->first();
        $race->delete();
        return redirect()->route('race.list')->with('success', 'Ascendência removida com sucesso!');

    }

}