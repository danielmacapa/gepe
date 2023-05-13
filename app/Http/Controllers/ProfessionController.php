<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;
use Illuminate\Support\Str;

class ProfessionController extends Controller
{
    //
    public function list()
    {
        $professions = Profession::all();
        return view('profession/list', compact('professions'));
    }
    public function show($uuid)
    {
        $profession = Profession::where('uuid', $uuid)->first();
        return view('profession/show', compact('profession'));
    }
    public function create()
    {
        return view('profession/create');
    }
    public function store(Request $request)
    {
        $category = Profession::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'talent_name' => $request->talent_name,
            'talent_description' => $request->talent_description,
            'equipment' => $request->equipment

        ]);
        return redirect()->route('profession.list');
    }

    public function update($uuid)
    {
        $profession = Profession::where('uuid', $uuid)->first();
        return view('profession/update', compact('profession'));
    }

    public function put(Request $request)
    {
        $profession = Profession::where('uuid', $request->uuid)->first();

        $profession->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'talent_name' => $request->talent_name,
            'talent_description' => $request->talent_description,
            'equipment' => $request->equipment

        ]);
    }

    public function delete($uuid)
    {
        $profession = Profession::where('uuid', $uuid)->first();
        return view('profession/delete', compact('profession'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $profession = Profession::where('uuid', $request->uuid)->first();
        $profession->delete();
        return redirect()->route('profession.list');
    }

}
