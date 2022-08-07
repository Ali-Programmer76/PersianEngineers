<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Team\CreateTeamRequest;
use App\Http\Requests\Administrator\Team\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(3);
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(CreateTeamRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/team', $image_name);
        }
        Team::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'name' => $request->name,
            'job' => $request->job,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);
        session()->flash('create');
        return redirect()->route('team.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/team/' . $team->image)) {
                unlink('admin/images/team/' . $team->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/team', $image_name);
        } else {
            $image_name = $team->image;
        }
        $team->update([
            'image' => $image_name,
            'alt' => $request->alt,
            'name' => $request->name,
            'job' => $request->job,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);
        session()->flash('update');
        return redirect()->route('team.index');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if (file_exists('admin/images/team/' . $team->image)) {
            unlink('admin/images/team/' . $team->image);
        }
        $team->destroy($id);
        session()->flash('delete');
        return redirect()->route('team.index');
    }
}
