<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Project\CreateProjectRequest;
use App\Http\Requests\Administrator\Project\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(3);
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(CreateProjectRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/project', $image_name);
        }
        Project::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'title' => $request->title,
            'description' => $request->description
        ]);
        session()->flash('create');
        return redirect()->route('project.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/project/' . $project->image)) {
                unlink('admin/images/project/' . $project->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/project', $image_name);
        } else {
            $image_name = $project->image;
        }
        $project->update([
            'image' => $image_name,
            'alt' => $request->alt,
            'title' => $request->title,
            'description' => $request->description
        ]);
        session()->flash('update');
        return redirect()->route('project.index');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if (file_exists('admin/images/project/' . $project->image)) {
            unlink('admin/images/project/' . $project->image);
        }
        $project->destroy($id);
        session()->flash('delete');
        return redirect()->route('project.index');
    }
}
