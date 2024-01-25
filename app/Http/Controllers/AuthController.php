<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'password'=>'required|min:6'
        ]);
        

        $data = [
            'username' => $req->input('username'),
            'password' => $req->input('password')
        ];

        
        // $user = User::where('email or Phone_number', '=', $data['username'])->first();
        $user = User::where('email', $data['username'])->orWhere('phone', $data['username'])->first();
        if($user){
            if(Hash::check($data['password'], $user->password)){
                $req->session()->put('userId', $user->id);
                return redirect('/portal/dashboard');
            }else{
                return back()->withErrors(['fail' => 'Invalid Authorization access!']);
            }
        }else{
            return back()->withErrors(['fail' => 'This Email or Phone Number does not exist!']);
        }
    }

    public function resetPassword()
    {
        return view('resetPassword');
    }

    public function logout()
    {

        if(Session::has('userId')) {
            Session::pull('userId');
            return redirect('login');
        }

    }



    public function index()
    {
        $data = array();
        if(Session::has('userId')) {
            $data = User::where('id', '=', Session::has('userId'))->first();
            unset($data->password);
            return view('portal.home', compact('data'));
        }else{
            return redirect('login');
        }
        
    }
}
