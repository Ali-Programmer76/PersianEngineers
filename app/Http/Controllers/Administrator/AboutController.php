<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\About\CreateAboutRequest;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index');
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(CreateAboutRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/about', $image_name);
        }
        About::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'help' => $request->help,
            'service_title_first' => $request->service_title_first,
            'service_description_first' => $request->service_description_first,
            'service_title_second' => $request->service_title_second,
            'service_description_second' => $request->service_description_second,
            'service_title_third' => $request->service_title_third,
            'service_description_third' => $request->service_description_third,
            'service_title_fourth' => $request->service_title_fourth,
            'service_description_fourth' => $request->service_description_fourth,
            'experience_title' => $request->experience_title,
            'experience_description' => $request->experience_description,
        ]);
        session()->flash('create');
        return redirect()->route('about.index');
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
