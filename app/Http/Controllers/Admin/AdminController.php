<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Admin;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

     public function login(Request $request){

      $this->validate($request,[
          'email'=>'required',
          'password'=>'required',
       ]);
        if(!Auth::guard('admin')->attempt(['email' => $request->email,
                                           'password' =>$request->password]))
       {
            return redirect()->route('Admin.index')
                             ->with('gagal','email and password you entered are incorrect');
       }
       else
       {
            return  redirect()->route('dashboard');
       }

    }

    public function logout(Request $request)
     {
          auth('admin')->logout();
          return redirect()->route('Admin.index');
     }

}
