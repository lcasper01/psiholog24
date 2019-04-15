<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.home');
    }
    public function test()
    {
        return view('layouts.app');
    }

    public function SpecProfile()
    {

        return view('page.Specprofile');
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



}
