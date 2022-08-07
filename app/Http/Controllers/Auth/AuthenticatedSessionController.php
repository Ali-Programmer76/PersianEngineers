<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\FooterAbout;
use App\Models\FooterContact;
use App\Models\FooterQuickAccess;
use App\Models\FooterService;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seo;
use App\Models\TopHeader;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $seo = Seo::orderBy('id', 'desc')->take(1)->first();
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $footerAbout = FooterAbout::orderBy('id', 'desc')->take(1)->first();
        $footerServices = FooterService::orderBy('id', 'desc')->take(3)->get();
        $footerQuickAccesses = FooterQuickAccess::orderBy('id', 'asc')->take(5)->get();
        $footerContact = FooterContact::orderBy('id', 'desc')->take(1)->first();
        return view('auth.login', compact('seo', 'topHeader', 'footerAbout', 'footerServices', 'footerQuickAccesses', 'footerContact'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
