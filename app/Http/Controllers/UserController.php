<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   
        return view('users.index', [
            'users' => User::where('id', '!=', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
            'genders' => Gender::all()
        ]);
    }

    public function edit(User $user)
    {   
        return view('users.edit', [
            'user' => $user,
            'roles' => Role::all()
        ]);
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {   
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User successfully removed.');
    }

    public function updateRole(Request $request, User $user)
    {   
        $user->update([
            'role_id' => $request->role_id
        ]);

        return redirect()->route('users.index')->with('success', 'Role successfully changed.');
    }
}
