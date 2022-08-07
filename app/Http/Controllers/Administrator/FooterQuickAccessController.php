<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Footer\quickAccess\CreateFooterQuickAccessRequest;
use App\Http\Requests\Administrator\Footer\quickAccess\UpdateFooterQuickAccessRequest;
use App\Models\FooterQuickAccess;
use Illuminate\Http\Request;

class FooterQuickAccessController extends Controller
{
    public function index()
    {
        $footerQuickAccesses = FooterQuickAccess::paginate(3);
        return view('admin.footer.quickAccess.index', compact('footerQuickAccesses'));
    }

    public function create()
    {
        return view('admin.footer.quickAccess.create');
    }

    public function store(CreateFooterQuickAccessRequest $request)
    {
        FooterQuickAccess::create([
            'title' => $request->title,
            'link' => $request->link
        ]);
        session()->flash('create');
        return redirect()->route('footerQuickAccess.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $footerQuickAccess = FooterQuickAccess::findOrFail($id);
        return view('admin.footer.quickAccess.edit', compact('footerQuickAccess'));
    }

    public function update(UpdateFooterQuickAccessRequest $request, $id)
    {
        $footerQuickAccess = FooterQuickAccess::findOrFail($id);
        $footerQuickAccess->update([
            'title' => $request->title,
            'link' => $request->link
        ]);
        session()->flash('update');
        return redirect()->route('footerQuickAccess.index');
    }

    public function destroy($id)
    {
        $footerQuickAccess = FooterQuickAccess::findOrFail($id);
        $footerQuickAccess->destroy($id);
        session()->flash('delete');
        return redirect()->route('footerQuickAccess.index');
    }
}
