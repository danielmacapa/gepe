<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Campaign_User;
use Illuminate\Support\Str;

class CampaignUserController extends Controller
{
    public function list()
    {
        $campaign_users = Campaign_User::all();
        return view('campaign_user/list', compact('campaign_users'));
    }
    public function show($uuid)
    {
        $campaign_user = Campaign_User::where('uuid', $uuid)->first();
        return view('campaign_user/show', compact('campaign_user'));
    }
    public function create()
    {
        $campaigns = Campaign::all();
        $users = User::all();
        return view('campaign_user/create', compact('campaigns', 'users'));
    }
    public function store(Request $request)
    {
        //valida as informações entradas
        $request->validate([
            'campaign_id' => 'required',
            'user_id' => 'required'
        ]);
        $campaign_user = Campaign_User::create([
            'uuid' => Str::uuid(),
            'campaign_id' => $request->campaign_id,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('campaign_user.list')->with('success', 'Relacionamento criado com sucesso!');
    }

    public function update($uuid)
    {
        $campaigns = Campaign::all();
        $users = User::all();
        $campaign_user = Campaign_User::where('uuid', $uuid)->first();
        return view('campaign_user/update', compact('campaign_users', 'campaigns', 'users'));
    }

    public function put(Request $request)
    {
        $campaign_user = Campaign_User::where('uuid', $request->uuid)->first();

        //valida as informações entradas
        $request->validate([
            'campaign_id' => 'required',
            'user_id' => 'required'
        ]);

        $campaign_user->update([
            'campaign_id' => $request->campaign_id,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('campaign_user.list')->with('success', 'Relacionamento atualizado com sucesso!');

    }

    public function delete($uuid)
    {
        $campaign_user = Campaign_User::where('uuid', $uuid)->first();
        return view('campaign_user/delete', compact('campaign_user'));
    }

    public function destroy(Request $request)
    {
        //utiliza-se a função first porque $request virá em forma de array
        $campaign_user = Campaign_User::where('uuid', $request->uuid)->first();
        $campaign_user->delete();
        return redirect()->route('campaign_user.list')->with('success', 'Relacionamento removido com sucesso!');
        ;
    }

}
