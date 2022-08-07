<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Hero\CreateHeroRequest;
use App\Http\Requests\Administrator\Hero\UpdateHeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::paginate(3);
        return view('admin.hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(CreateHeroRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/hero', $image_name);
        }
        Hero::create([
            'image' => $image_name,
            'established' => $request->established,
            'description' => $request->description,
            'about' => $request->about,
            'question' => $request->question
        ]);
        session()->flash('create');
        return redirect()->route('home.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(UpdateHeroRequest $request, $id)
    {
        $hero = Hero::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/hero/' . $hero->image)) {
                unlink('admin/images/hero/' . $hero->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/hero', $image_name);
        } else {
            $image_name = $hero->image;
        }
        $hero->update([
            'image' => $image_name,
            'established' => $request->established,
            'description' => $request->description,
            'about' => $request->about,
            'question' => $request->question
        ]);
        session()->flash('update');
        return redirect()->route('home.index');
    }

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $image_name = $hero->image;
        if (file_exists('admin/images/hero/' . $image_name)) {
            unlink('admin/images/hero/' . $image_name);
        }
        $hero->destroy($id);
        session()->flash('delete');
        return redirect()->route('home.index');
    }
}
