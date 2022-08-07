<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Blog\CreateBlogRequest;
use App\Http\Requests\Administrator\Blog\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        // $blogs = Blog::with('user')->get();
        $blogs = Blog::orderBy('id', 'desc')->paginate(3);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
    }

    public function store(CreateBlogRequest $request)
    {
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/blog', $image_name);
        }
        Blog::create([
            'image' => $image_name,
            'alt' => $request->alt,
            'subject' => $request->subject,
            'body' => $request->body,
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id
        ]);
        session()->flash('create');
        return redirect()->route('blogs.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $uploaded_file = $request->file('image');
        $image_name = "";
        if (!empty($uploaded_file)) {
            if (file_exists('admin/images/blog/' . $blog->image)) {
                unlink('admin/images/blog/' . $blog->image);
            }
            $image_name = time() . "." . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move('admin/images/blog', $image_name);
        } else {
            $image_name = $blog->image;
        }
        $blog->update([
            'image' => $image_name,
            'alt' => $request->alt,
            'subject' => $request->subject,
            'body' => $request->body,
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords
        ]);
        session()->flash('update');
        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if (file_exists('admin/images/blog/' . $blog->image)) {
            unlink('admin/images/blog/' . $blog->image);
        }
        $blog->destroy($id);
        session()->flash('delete');
        return redirect()->route('blogs.index');
    }
}
