<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\topHeader\CreateTopHeaderRequest;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class TopHeaderController extends Controller
{
    public function index()
    {
        return view('admin.topHeader.index');
    }

    public function create()
    {
        return view('admin.topHeader.create');
    }

    public function store(CreateTopHeaderRequest $request)
    {
        TopHeader::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'telegram' => $request->email
        ]);
        session()->flash('create');
        return redirect()->route('topHeader.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
