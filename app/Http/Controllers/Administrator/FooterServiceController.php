<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Footer\service\CreateFooterServiceRequest;
use App\Http\Requests\Administrator\Footer\service\UpdateFooterServiceRequest;
use App\Models\FooterService;
use Illuminate\Http\Request;

class FooterServiceController extends Controller
{
    public function index()
    {
        $footerServices = FooterService::paginate(3);
        return view('admin.footer.service.index', compact('footerServices'));
    }

    public function create()
    {
        return view('admin.footer.service.create');
    }

    public function store(CreateFooterServiceRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/footer/service', $image_name);
        }
        FooterService::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'title' => $request->title,
            'link' => $request->link,
            'author' => 'ادمین'
        ]);
        session()->flash('create');
        return redirect()->route('footerService.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $footerService = FooterService::findOrFail($id);
        return view('admin.footer.service.edit', compact('footerService'));
    }

    public function update(UpdateFooterServiceRequest $request, $id)
    {
        $footerService = FooterService::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/footer/service/' . $footerService->image)) {
                unlink('admin/images/footer/service/' . $footerService->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/footer/service', $image_name);
        } else {
            $image_name = $footerService->image;
        }
        $footerService->update([
            'image' => $image_name,
            'alt' => $request->alt,
            'title' => $request->title,
            'link' => $request->link,
            'author' => 'ادمین'
        ]);
        session()->flash('update');
        return redirect()->route('footerService.index');
    }

    public function destroy($id)
    {
        $footerService = FooterService::findOrFail($id);
        if (file_exists('admin/images/footer/service/' . $footerService->image)) {
            unlink('admin/images/footer/service/' . $footerService->image);
        }
        $footerService->destroy($id);
        session()->flash('delete');
        return redirect()->route('footerService.index');
    }
}
