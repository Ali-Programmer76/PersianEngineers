<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Counter;
use App\Models\Hero;
use App\Models\Introduction;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Team;
use App\Models\TopHeader;
use Illuminate\Http\Request;

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
        return view('front.index', compact('seo', 'topHeader', 'hero', 'about', 'introduction', 'service', 'counters', 'teams'));
    }
}
