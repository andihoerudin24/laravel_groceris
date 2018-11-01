<?php

namespace App\Http\Controllers\Admin;

use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_product'=>'required|max:50|min:3',
            'deskripsi'   =>'required|min:5',
            'stock'       =>'required',
        ]);
        Products::create($request->all());
        return redirect()->route('products.index')->with('sukses','successfully add products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Products::findOrFail($id);
        return view('admin.products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $products=Products::find($id);
        $this->validate($request,[
            'name_product'=>'required|max:50|min:3',
            'deskripsi'   =>'required|min:5',
            'stock'       =>'required',
        ]);
        $products->update($request->all());
        return redirect()->route('products.index')->with('update','successfully update products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Products::find($id);
        $products->delete();
        return redirect()->route('products.index')->with('delete','successfully delete products');


    }

    public function datatable()
    {
      $products=Products::query();
      return Datatables::of($products)
      ->addIndexColumn()
      ->addColumn('foto',function($products){
         return  '<img src="'.asset($products->foto).'" height="32" width="32">';
      })
      ->addColumn('action',function($products){
        return view('admin.button._action',[
            'model' =>$products,
            'edit'  =>route('products.edit',$products->id),
            'delete'=>route('products.destroy',$products->id)
         ]);
      })
      ->addColumn('categories',function($products){
          return $products->categories->nama_kategori;
      })
      ->rawColumns(['foto','action','categories'])
      ->make(true);
    }
}
