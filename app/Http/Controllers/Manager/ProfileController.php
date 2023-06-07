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
        $characters = auth()->user()->characters;
        return view('dashboard', compact('characters'));

    }
    // public function panel_admin(): View
    // {
    //     $characters = Character::all();
    //     $races = Race::all();
    //     $professions = Profession::all();
    //     $users = User::all();
    //     $campaigns = Campaign::all();
    //     return view('panel_admin', compact('characters','races','professions','users','campaigns' ));

    // }

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
