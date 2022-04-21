<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Counter\CreateCounterRequest;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        return view('admin.counter.index');
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
