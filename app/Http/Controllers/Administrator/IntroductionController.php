<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Introduction\CreateIntroductionRequest;
use App\Http\Requests\Administrator\Introduction\UpdateIntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index()
    {
        $introductions = Introduction::paginate(3);
        return view('admin.introduction.index', compact('introductions'));
    }

    public function create()
    {
        return view('admin.introduction.create');
    }

    public function store(CreateIntroductionRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/introduction', $image_name);
        }
        Introduction::create([
            'image' => $image_name,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);
        session()->flash('create');
        return redirect()->route('introduction.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $introduction = Introduction::findOrFail($id);
        return view('admin.introduction.edit', compact('introduction'));
    }

    public function update(UpdateIntroductionRequest $request, $id)
    {
        $introduction = Introduction::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/introduction/' . $introduction->image)) {
                unlink('admin/images/introduction/' . $introduction->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/introduction', $image_name);
        } else {
            $image_name = $introduction->image;
        }
        $introduction->update([
            'image' => $image_name,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);
        session()->flash('update');
        return redirect()->route('introduction.index');
    }

    public function destroy($id)
    {
        $introduction = Introduction::findOrFail($id);
        if (file_exists('admin/images/introduction/' . $introduction->image)) {
            unlink('admin/images/introduction/' . $introduction->image);
        }
        $introduction->destroy($id);
        session()->flash('delete');
        return redirect()->route('introduction.index');
    }
}
