<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userID = Auth::user()->id;
            $user = User::find($userID);
        }
        $usersspecs = USER::where('isspec',1)->get();
        return view('page.home', compact('user','usersspecs'));
    }

    public function test()
    {
        return view('layouts.app');
    }

    public function Speclist()
    {
        $users = USER::where('isspec',1)->get();
        return view('page.SpecList', compact('users'));
    }

    public function SpecProfileSettings()
    {
        if (Auth::check()) {
            $userID = Auth::user()->id;
            $user = User::find($userID);

            return view('page.SpecProfileSettings', compact('user'));
        }

    }

    public function Specprofile(Request $request)
    {
        $userID = $request->userID;
        $user = User::find($userID);
        return view('page.Specprofile', compact('user'));
    }

    public function WebConference()
    {   if (Auth::check()) {
        $userID = Auth::user()->id;
        $user = User::find($userID);
        return view('page.webconference', compact('user'));
    }

    }

    public function search()
    {
        $search=\Request::get('title');
        $profiles= User::where('name', 'like','%'.$search.'%')->get();
        return view('page.search',compact('profiles'));
    }


}
