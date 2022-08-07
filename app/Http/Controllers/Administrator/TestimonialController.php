<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Testimonial\CreateTestimonialRequest;
use App\Http\Requests\Administrator\Testimonial\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::paginate(3);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(CreateTestimonialRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/testimonial', $image_name);
        }
        Testimonial::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
        ]);
        session()->flash('create');
        return redirect()->route('testimonial.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/testimonial/' . $testimonial->image)) {
                unlink('admin/images/testimonial/' . $testimonial->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/testimonial', $image_name);
        } else {
            $image_name = $testimonial->image;
        }
        $testimonial->update([
            'image' => $image_name,
            'alt' => $request->alt,
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
        ]);
        session()->flash('update');
        return redirect()->route('testimonial.index');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if (file_exists('admin/images/testimonial/' . $testimonial->image)) {
            unlink('admin/images/testimonial/' . $testimonial->image);
        }
        $testimonial->destroy($id);
        session()->flash('delete');
        return redirect()->route('testimonial.index');
    }
}
