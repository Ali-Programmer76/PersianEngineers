<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $seo = Seo::orderBy('id', 'desc')->take(1)->first();
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        return view('front.index', compact('seo', 'topHeader'));
    }
}
