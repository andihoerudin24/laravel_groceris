<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cart;
use Auth;
class ChekoutController extends Controller
{
   protected function save($request){
    $data=[
        'name'      => $request->name,
        'email'     => $request->email,
        'address'   => $request->address,
        'password'  => bcrypt($request->password),
        'country'   => $request->country,
        'city'      => $request->city,
        'last_name' => $request->last_name,
        'phone'     => $request->phone,
        'postcode'  => $request->postcode,
        'notes'     => $request->notes
       ];
       return $data;
   }

    public function index()
    {
        $user=Auth::user();
        return view('chekout.index',compact('user'));
    }

    public function add(Request $request)
    {
        if(!Auth::user()){
        $save=$this->save($request);
        $user=User::create($save);
        foreach(Cart::getContent() as $item){
           $user->transactions()->attach($item->id,['qty'=>$item->quantity,'order_total'=>$item->price*$item->quantity]);
       }
       return redirect()->route('enter')->with('sukses','
       successfully entered, please login using the email and password that has been created');
    }else{
        $user=auth()->user()->id;
        $save=$this->save($request);
        $update=User::find($user);
        $update->update($save);
        foreach(Cart::session($user)->getContent($user) as $item){
            $update->transactions()->attach($item->id,['qty'=>$item->quantity,'order_total'=>$item->price*$item->quantity]);
        }
        return redirect()->route('transaksihistory')
        ->with('sukses','
        successful add shopping');
        ;
    }
}


}
