<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Footer\about\CreateFooterAboutRequest;
use App\Http\Requests\Administrator\Footer\about\UpdateFooterAboutRequest;
use App\Models\FooterAbout;
use Illuminate\Http\Request;

class FooterAboutController extends Controller
{
    public function index()
    {
        $footerAbouts = FooterAbout::paginate(3);
        return view('admin.footer.about.index', compact('footerAbouts'));
    }

    public function create()
    {
        return view('admin.footer.about.create');
    }

    public function store(CreateFooterAboutRequest $request)
    {
        FooterAbout::create([
            'title' => $request->title,
            'description' => $request->description,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'telegram' => $request->telegram
        ]);
        session()->flash('create');
        return redirect()->route('footerAbout.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $footerAbout = FooterAbout::findOrFail($id);
        return view('admin.footer.about.edit', compact('footerAbout'));
    }

    public function update(UpdateFooterAboutRequest $request, $id)
    {
        $footerAbout = FooterAbout::findOrFail($id);
        $footerAbout->update([
            'title' => $request->title,
            'description' => $request->description,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'telegram' => $request->telegram
        ]);
        session()->flash('update');
        return redirect()->route('footerAbout.index');
    }

    public function destroy($id)
    {
        $footerAbout = FooterAbout::findOrFail($id);
        $footerAbout->destroy($id);
        session()->flash('delete');
        return redirect()->route('footerAbout.index');
    }
}
