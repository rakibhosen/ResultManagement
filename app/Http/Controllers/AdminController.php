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

    // public function update_avatar(Request $request){

    // 	// Handle the user upload of avatar
    // 	if($request->hasFile('avatar')){
    // 		$avatar = $request->file('avatar');
    // 		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    // 		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    // 		$user = Auth::user();
    // 		$user->avatar = $filename;
    // 		$user->save();
    // 	}

    // 	return view('profile', array('user' => Auth::user()) );

    // }



}
