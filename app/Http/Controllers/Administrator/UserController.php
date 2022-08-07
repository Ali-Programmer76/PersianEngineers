<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(3);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => ['required', 'string', 'size:11', Rule::unique('users', 'mobile')->ignore($user->id)],
            'email' => ['required', 'string', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'role' => 'required|string'
        ]);
        $user->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'role' => $request->role
        ]);
        // $request->session()->flash('update');
        session()->flash('update');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->destroy($id);
        session()->flash('delete');
        return redirect()->route('users.index');
    }
}
