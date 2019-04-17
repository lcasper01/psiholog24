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
        return view('page.home', compact('user'));
    }
    public function test()
    {
        return view('layouts.app');
    }

    public function Speclist()
    {
        $users=USER::all();
        return view('page.SpecList',compact('users'));
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
        $userID=$request->userID;
        $user = User::find($userID);
        return view('page.Specprofile', compact('user'));
    }



}
