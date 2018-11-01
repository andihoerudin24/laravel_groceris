<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;
use Illuminate\Support\Facades\DB;
use Cart;
use Auth;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        $products=Products::all();
        return view('shop.index',compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Products::find($id);
        return view('shop.detail',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Auth::user()){
            Cart::add(array(
                'id' =>$id,
                'name' => $request->name_products,
                'price' =>$request->order_total,
                'quantity' =>$request->qty,
                'attributes' => array(
                 'foto'  => $request->foto,
                )
           ));

          return redirect()->route('Shop.index');
      }else{
        $userId = auth()->user()->id;
        Cart::session($userId)->add(array(
            'id' =>$id,
            'name' => $request->name_products,
            'price' =>$request->order_total,
            'quantity' =>$request->qty,
            'attributes' => array(
            'foto'  => $request->foto,
            )
       ));
          return redirect()->route('Shop.index');
      }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show_id($id)
    {
        $categories=Categories::all();
        $products=Products::where('id_categories',$id)->get();
        return view('shop.index',compact('categories','products'));
    }
}
