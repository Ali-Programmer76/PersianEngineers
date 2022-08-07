<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\FooterAbout;
use App\Models\FooterContact;
use App\Models\FooterQuickAccess;
use App\Models\FooterService;
use App\Models\Hero;
use App\Models\Introduction;
use App\Models\Project;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TopHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $seo = Seo::orderBy('id', 'desc')->take(1)->first();
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $hero = Hero::orderBy('id', 'desc')->take(1)->first();
        $about = About::orderBy('id', 'desc')->take(1)->first();
        $introduction = Introduction::orderBy('id', 'desc')->take(1)->first();
        $service = Service::orderBy('id', 'desc')->take(1)->first();
        $counters = Counter::orderBy('id', 'desc')->take(4)->get();
        $teams = Team::orderBy('id', 'desc')->take(4)->get();
        $projects = Project::orderBy('id', 'asc')->take(6)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->take(3)->get();
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
        $faq = Faq::orderBy('id', 'desc')->take(1)->first();
        $footerAbout = FooterAbout::orderBy('id', 'desc')->take(1)->first();
        $footerServices = FooterService::orderBy('id', 'desc')->take(3)->get();
        $footerQuickAccesses = FooterQuickAccess::orderBy('id', 'asc')->take(5)->get();
        $footerContact = FooterContact::orderBy('id', 'desc')->take(1)->first();
        return view('front.index', compact('seo', 'topHeader', 'hero', 'about', 'introduction', 'service', 'counters', 'teams', 'projects', 'testimonials', 'blogs', 'faq', 'footerAbout', 'footerServices', 'footerQuickAccesses', 'footerContact'));
    }

    public function contact(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
        ]);
        Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);
        return true;
    }

    public function blog()
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $categories = Category::all();
        $blogs = Blog::orderBy('id', 'desc')->paginate(4);
        $projects = Project::orderBy('id', 'asc')->take(4)->get();
        $footerAbout = FooterAbout::orderBy('id', 'desc')->take(1)->first();
        $footerServices = FooterService::orderBy('id', 'desc')->take(3)->get();
        $footerQuickAccesses = FooterQuickAccess::orderBy('id', 'asc')->take(5)->get();
        $footerContact = FooterContact::orderBy('id', 'desc')->take(1)->first();
        return view('front.blog', compact('topHeader', 'categories', 'blogs', 'projects', 'footerAbout', 'footerServices', 'footerQuickAccesses', 'footerContact'));
    }

    public function blogDetail($id)
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $blog = Blog::findOrFail($id);
        $projects = Project::orderBy('id', 'asc')->take(4)->get();
        $footerAbout = FooterAbout::orderBy('id', 'desc')->take(1)->first();
        $footerServices = FooterService::orderBy('id', 'desc')->take(3)->get();
        $footerQuickAccesses = FooterQuickAccess::orderBy('id', 'asc')->take(5)->get();
        $footerContact = FooterContact::orderBy('id', 'desc')->take(1)->first();
        // $comments = Comment::with('user')->where('blog_id', $id)->where('status', 1)->where('parent_id', null)->get();
        // $replies = Comment::with('user')->where('blog_id', $id)->where('status', 1)->where('parent_id', true)->get();
        // $comments = Comment::with(['user', 'children'])->where('blog_id', $id)->where('status', 1)->whereNull('parent_id')->get();
        $comments = Comment::with(['user', 'children' => function ($query) {
            $query->where('status', 1);
        }])->where('blog_id', $id)->where('status', 1)->whereNull('parent_id')->get();
        return view('front.blog-details', compact('topHeader', 'blog', 'projects', 'footerAbout', 'footerServices', 'footerQuickAccesses', 'footerContact', 'comments'));
    }

    public function comment(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string|max:1000',
        ]);
        Comment::create([
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'blog_id' => $request->blog_id,
            'parent_id' => $request->parent_id
        ]);
        return true;
    }

    public function blogCategory($id)
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $categories = Category::all();
        $blogs = Blog::where('category_id', 'like', "%" . $id . "%")->paginate(4);
        $projects = Project::orderBy('id', 'asc')->take(4)->get();
        $footerAbout = FooterAbout::orderBy('id', 'desc')->take(1)->first();
        $footerServices = FooterService::orderBy('id', 'desc')->take(3)->get();
        $footerQuickAccesses = FooterQuickAccess::orderBy('id', 'asc')->take(5)->get();
        $footerContact = FooterContact::orderBy('id', 'desc')->take(1)->first();
        return view('front.blog-category', compact('topHeader', 'categories', 'blogs', 'projects', 'footerAbout', 'footerServices', 'footerQuickAccesses', 'footerContact'));
    }
}
