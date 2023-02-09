<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware(['admin'])->except('show', 'update', 'updatePassword');
    }

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
        $request->validate([
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'gender' => 'required',
            'email' => 'required|string',
            'photo' => 'image|mimes:jpeg,jpg,png'
        ]);

        if ($request->hasFile('photo')) {
            if ($user->photo != NULL)
                Storage::delete('public/users/' . $user->photo);
            
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('first_name') . '_' . $request->input('last_name') . '.' . $extension;
            $request->file('photo')->storeAs('public/users', $proofNameToStore);
        } else {
            $proofNameToStore = $user->photo;
        }
        
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender_id' => $request->gender,
            'email' => $request->email,
            'photo' => $proofNameToStore,
        ]);

        return redirect()->back()->with('success', 'Data successfully updated.');
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

    public function updatePassword(Request $request, User $user)
    {   
        $request->validate([
            'password' => 'required|string|regex:/^(?=.*[0-9]).+$/|min:8|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($request->password)
        ]);
        
        return redirect()->back()->with('success', 'Password successfully changed.');
    }
}
