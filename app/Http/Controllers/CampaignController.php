<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    public function list()
    {
        $campaigns = Campaign::all();
        return view('campaign/list', compact('campaigns'));
    }
    public function show($uuid)
    {
        $campaign = Campaign::where('uuid', $uuid)->first();
        return view('campaign/show', compact('campaign'));
    }
    public function create()
    {
        return view('campaign/create');
    }
    public function store(Request $request)
    {
        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required|string|max:50|unique:campaigns,name'
        ]);

        $campaign = Campaign::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('campaign.list')->with('success', 'Campanha cadastrada com sucesso!');
    }

    public function update($uuid)
    {
        $campaign = Campaign::where('uuid', $uuid)->first();
        return view('campaign/update', compact('campaign'));
    }

    public function put(Request $request)
    {
        $campaign = Campaign::where('uuid', $request->uuid)->first();

        // regras de validação (precisa pedir para mostrar o erro, está no master template)
        $request->validate([
            'name' => 'required'
        ]);

        $campaign->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('campaign.list')->with('success', 'Campanha atualizada com sucesso!');
    }

    public function delete($uuid)
    {
        $campaign = Campaign::where('uuid', $uuid)->first();
        return view('campaign/delete', compact('campaign'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $campaign = Campaign::where('uuid', $request->uuid)->first();
        $campaign->delete();
        return redirect()->route('campaign.list')->with('success', 'Campanha removida com sucesso!');

    }

}