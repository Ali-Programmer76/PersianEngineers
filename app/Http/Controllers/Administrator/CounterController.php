<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Counter\CreateCounterRequest;
use App\Http\Requests\Administrator\Counter\UpdateCounterRequest;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::paginate(3);
        return view('admin.counter.index', compact('counters'));
    }

    public function create()
    {
        return view('admin.counter.create');
    }

    public function store(CreateCounterRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/counter', $image_name);
        }
        Counter::create([
            'image' => $image_name,
            'title' => $request->title,
            'description' => $request->description
        ]);
        session()->flash('create');
        return redirect()->route('counter.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $counter = Counter::findOrFail($id);
        return view('admin.counter.edit', compact('counter'));
    }

    public function update(UpdateCounterRequest $request, $id)
    {
        $counter = Counter::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/counter/' . $counter->image)) {
                unlink('admin/images/counter/' . $counter->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/counter', $image_name);
        } else {
            $image_name = $counter->image;
        }
        $counter->update([
            'image' => $image_name,
            'title' => $request->title,
            'description' => $request->description
        ]);
        session()->flash('update');
        return redirect()->route('counter.index');
    }

    public function destroy($id)
    {
        $counter = Counter::findOrFail($id);
        if (file_exists('admin/images/counter/' . $counter->image)) {
            unlink('admin/images/counter/' . $counter->image);
        }
        $counter->destroy($id);
        session()->flash('delete');
        return redirect()->route('counter.index');
    }
}
