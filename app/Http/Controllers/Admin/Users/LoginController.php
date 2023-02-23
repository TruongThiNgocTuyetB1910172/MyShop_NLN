<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view(view:'admin.users.login');
    } 
    public function store(Request $request)
    {
        // dd($request->all());
       
        $this->validate($request,[
            'email' =>'required|email:filter',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'email' => $request->input(key:'email'), 
            'password' => $request->input(key:'password')
            // 'level' => 1
            // neu level 1 la admin thi dc dang nhap
        ],$request->input(key:'remember'))){
            return redirect()-> route('admin');
            
        }
       
        return redirect()->back();
    }
}