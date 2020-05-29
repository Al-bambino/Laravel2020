<?php

namespace App\Http\Controllers;

use App\TariffAddOn;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       return User::all();
    }

    public function show(User $user)
    {
        return $user->tariffAddOns;
    }

    public function edit(User $user)
    {
        $tariffAddOns = TariffAddOn::all();
        return view('user.edit', ['user' => $user, 'tariffAddOns' => $tariffAddOns]);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->only(['name', 'email']));
        $user->tariffAddOns()->sync($request->tariffAddOns);
        return redirect('/users');
    }



}
