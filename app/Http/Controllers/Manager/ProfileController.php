<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Campaign;
use App\Models\Character;
use App\Models\Profession;
use App\Models\Race;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show(): View
    {
        return view('home');
    }
    public function dashboard(): View
    {
        $logged = auth()->user();
        $permission = $logged->roles()->first();

        if($permission && $permission->name == 'admin'){
            $characters = Character::all();
            $races = Race::all();
            $professions = Profession::all();
            $users = User::all();
            $campaigns = Campaign::all();
            return view('dashboard_admin', compact('characters','races','professions','users','campaigns' ));
            }
        else{

        $characters = auth()->user()->characters;
        return view('dashboard_user', compact('characters'));}

    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
