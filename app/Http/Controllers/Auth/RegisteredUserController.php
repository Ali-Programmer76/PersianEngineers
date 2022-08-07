<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\FooterAbout;
use App\Models\FooterContact;
use App\Models\FooterQuickAccess;
use App\Models\FooterService;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Seo;
use App\Models\TopHeader;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
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
        return view('auth.register', compact('seo', 'topHeader', 'footerAbout', 'footerServices', 'footerQuickAccesses', 'footerContact'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'size:11', 'unique:users,mobile'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
