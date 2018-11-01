<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
class CartController extends Controller
{
  public function index()
  {
      return view('cart.index');
  }

  public function delete($id)
  {
    if(!Auth::user()){
      Cart::remove($id);
      return redirect()->back();
    }
     $userId = auth()->user()->id;
     Cart::session($userId)->remove($id);
     return redirect()->back();
  }
}
