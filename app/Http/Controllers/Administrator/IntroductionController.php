<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Introduction\CreateIntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index()
    {
        return view('admin.introduction.index');
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
