<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.pages.profile.index');
    }

    // public function avatar(){
    //     // return view('profile', array('user' => Auth::user()) );
    //     return view('admin.pages.profile.index', array('user' => Auth::user()) );
    // }
}
