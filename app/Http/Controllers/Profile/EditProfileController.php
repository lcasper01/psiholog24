<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class EditProfileController extends Controller
{
    public function edit(Request $request)
    {


        if (Auth::check()) {
            $userID = Auth::user()->id;
            $data=$request->input();
            $user = User::find($userID);
            $user->update($data);
            return redirect()->route('home',$user->id);
        }


    }
    public function test()
    {
        return view('page.test');
    }


    public function upload(Request $request)
    {
        $path=$request->file('image')->store('uploads', 'public');
        return view('page.home');
    }
}
