<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\About\CreateAboutRequest;
use App\Http\Requests\Administrator\About\UpdateAboutRequest;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::paginate(3);
        return view('admin.about.index', compact('abouts'));
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
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(UpdateAboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/about/' . $about->image)) {
                unlink('admin/images/about/' . $about->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/about', $image_name);
        } else {
            $image_name = $about->image;
        }
        $about->update([
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
        session()->flash('update');
        return redirect()->route('about.index');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        if (file_exists('admin/images/about/' . $about->image)) {
            unlink('admin/images/about/' . $about->image);
        }
        $about->destroy($id);
        session()->flash('delete');
        return redirect()->route('about.index');
    }
}
