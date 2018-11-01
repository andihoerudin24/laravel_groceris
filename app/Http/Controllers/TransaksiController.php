<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Storage;
class TransaksiController extends Controller
{
    public function index()
    {
        if (!Auth::user()){
            return view('transaksi.history');
        }
         else{
            $auth =Auth::user()->id;
            $user =User::find($auth);
            $users=$user->transactions()->paginate(5);
            return view('transaksi.history',compact('users'));
        }

    }

    public function upload(Request $request,$id)
    {
       if($request->user()->payment){
             Storage::delete($request->user()->payment);
       }
       $payemnt=$request->file('payment')->store('payment');
       $user=User::find($id);
       $user->update([
           'payment'=>$payemnt
       ]);
       return redirect()->back();
    }
}
