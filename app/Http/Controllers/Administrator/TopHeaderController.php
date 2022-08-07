<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\topHeader\CreateTopHeaderRequest;
use App\Http\Requests\Administrator\topHeader\UpdateTopHeaderRequest;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class TopHeaderController extends Controller
{
    public function index()
    {
        $topHeaders = TopHeader::paginate(3);
        return view('admin.topHeader.index', compact('topHeaders'));
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
            'telegram' => $request->telegram
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
        $topHeader = TopHeader::findOrFail($id);
        return view('admin.topHeader.edit', compact('topHeader'));
    }

    public function update(UpdateTopHeaderRequest $request, $id)
    {
        $topHeader = TopHeader::findOrFail($id);
        $topHeader->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'telegram' => $request->telegram
        ]);
        session()->flash('update');
        return redirect()->route('topHeader.index');
    }

    public function destroy($id)
    {
        $topHeader = TopHeader::findOrFail($id);
        $topHeader->destroy($id);
        session()->flash('delete');
        return redirect()->route('topHeader.index');
    }
}
