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
        $race = Race::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'talent_name' => $request->talent_name,
            'talent_description' => $request->talent_description

        ]);

        return redirect()->route('race.list');
    }

    public function update($uuid)
    {
        $race = Race::where('uuid', $uuid)->first();
        return view('race/update', compact('race'));
    }

    public function put(Request $request)
    {
        $race = Race::where('uuid', $request->uuid)->first();

        $race->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'talent_name' => $request->talent_name,
            'talent_description' => $request->talent_description
        ]);

        return redirect()->route('race.list');
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
        return redirect()->route('race.list');

    }

}
