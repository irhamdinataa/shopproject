<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function register(Request $request){
        \DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('login');
    }

    public function login(Request $request){
        $user = \DB::table('users')->where('email',$request->email)->first();
        if($user->password == $request->password){
            // $request->session()->put('id',$user->id_user);
            \Session::put('id_user',$user->id_user);
            echo 'data is stored with id of session ='.$request->session()->get('id');
            return redirect('/');
        }else{
            echo "wrong password or email";
        }
    }

    public function logout(){
        \Session::forget('id_user');
        return redirect('/');
    }

}
