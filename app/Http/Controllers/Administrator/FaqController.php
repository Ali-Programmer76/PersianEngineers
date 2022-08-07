<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Faq\CreateFaqRequest;
use App\Http\Requests\Administrator\Faq\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::paginate(3);
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(CreateFaqRequest $request)
    {
        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
            'faq_title_first' => $request->faq_title_first,
            'faq_description_first' => $request->faq_description_first,
            'faq_title_second' => $request->faq_title_second,
            'faq_description_second' => $request->faq_description_second,
            'faq_title_third' => $request->faq_title_third,
            'faq_description_third' => $request->faq_description_third,
        ]);
        session()->flash('create');
        return redirect()->route('faq.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(UpdateFaqRequest $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->update([
            'title' => $request->title,
            'description' => $request->description,
            'faq_title_first' => $request->faq_title_first,
            'faq_description_first' => $request->faq_description_first,
            'faq_title_second' => $request->faq_title_second,
            'faq_description_second' => $request->faq_description_second,
            'faq_title_third' => $request->faq_title_third,
            'faq_description_third' => $request->faq_description_third,
        ]);
        session()->flash('update');
        return redirect()->route('faq.index');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->destroy($id);
        session()->flash('delete');
        return redirect()->route('faq.index');
    }
}
