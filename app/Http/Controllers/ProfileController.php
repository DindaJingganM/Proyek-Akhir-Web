<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Alert;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'password' =>  'confirmed',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telepon = $request->no_telepon;
        $user->alamat = $request->alamat;
        if(!empty(($request->password))){
            $user->password = Hash::make ($request->password);
        }

        $user->update();

        alert()->success('Profile berhasil diupdate', 'YUHUUYY !!');
        return redirect('profile');
        
    }
}
