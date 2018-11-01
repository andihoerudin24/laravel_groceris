<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Cart;
class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('enter.login');
    }

    public function loginpost(Request $request)
    {

        if(!Auth::attempt(['email'    => $request->email,
                           'password' => $request->password]))
        {
            return redirect()->back()->with('gagal','Wrong email and password');
        }

        return redirect()->route('Shop.index');

    }

    public function register()
    {
        return view('enter.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request,[
            'name'    =>'required|min:3',
            'email'   =>'required|email|unique:users',
            'phone'   =>'required|max:13',
            'password'=>'required|min:6|confirmed'

        ]);
            User::create(
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'password'=>bcrypt($request->password),
                ]
            );
            return redirect()->route('enter')->with('ok','thank you for registering, please log in thank you');
    }
   public function about()
   {
       return view('footer.about');
   }
   public function contact()
   {
       return view('footer.contact');
   }
   public function faq()
   {
       return view('footer.faq');
   }
   public function terms()
   {
       return view('footer.terms');
   }
   public function privacy()
   {
       return view('footer.privacy');
   }
}
