<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Service\CreateServiceRequest;
use App\Http\Requests\Administrator\Service\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(3);
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(CreateServiceRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/service', $image_name);
        }
        Service::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'service_title_first' => $request->service_title_first,
            'service_description_first' => $request->service_description_first,
            'service_link_first' => $request->service_link_first,
            'service_title_second' => $request->service_title_second,
            'service_description_second' => $request->service_description_second,
            'service_link_second' => $request->service_link_second,
            'service_title_third' => $request->service_title_third,
            'service_description_third' => $request->service_description_third,
            'service_link_third' => $request->service_link_third,
        ]);
        session()->flash('create');
        return redirect()->route('service.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/service/' . $service->image)) {
                unlink('admin/images/service/' . $service->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/service', $image_name);
        } else {
            $image_name = $service->image;
        }
        $service->update([
            'image' => $image_name,
            'alt' => $request->alt,
            'service_title_first' => $request->service_title_first,
            'service_description_first' => $request->service_description_first,
            'service_link_first' => $request->service_link_first,
            'service_title_second' => $request->service_title_second,
            'service_description_second' => $request->service_description_second,
            'service_link_second' => $request->service_link_second,
            'service_title_third' => $request->service_title_third,
            'service_description_third' => $request->service_description_third,
            'service_link_third' => $request->service_link_third,
        ]);
        session()->flash('update');
        return redirect()->route('service.index');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if (file_exists('admin/images/service/' . $service->image)) {
            unlink('admin/images/service/' . $service->image);
        }
        $service->destroy($id);
        session()->flash('delete');
        return redirect()->route('service.index');
    }
}
