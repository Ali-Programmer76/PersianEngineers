<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Footer\Contact\CreateFooterContactRequest;
use App\Http\Requests\Administrator\Footer\Contact\UpdateFooterContactRequest;
use App\Models\FooterContact;
use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    public function index()
    {
        $footerContacts = FooterContact::paginate(3);
        return view('admin.footer.contact.index', compact('footerContacts'));
    }

    public function create()
    {
        return view('admin.footer.contact.create');
    }

    public function store(CreateFooterContactRequest $request)
    {
        FooterContact::create([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        session()->flash('create');
        return redirect()->route('footerContact.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $footerContact = FooterContact::findOrFail($id);
        return view('admin.footer.contact.edit', compact('footerContact'));
    }

    public function update(UpdateFooterContactRequest $request, $id)
    {
        $footerContact = FooterContact::findOrFail($id);
        $footerContact->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        session()->flash('update');
        return redirect()->route('footerContact.index');
    }

    public function destroy($id)
    {
        $footerContact = FooterContact::findOrFail($id);
        $footerContact->delete($id);
        session()->flash('delete');
        return redirect()->route('footerContact.index');
    }
}
