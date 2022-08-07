<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(3);
        return view('admin.dashboard', compact('users'));
    }
}
