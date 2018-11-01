<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'nama_kategori'=>'required|max:20',
            'deskripsi'    =>'required|max:50',
        ]);
        Categories::create($request->all());
        return redirect()->route('categories.index')->with('sukses','successfully add category');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Categories::findOrFail($id);
        return view('admin.categories.edit',compact('categories'));
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
        $categories=Categories::find($id);
        $this->validate($request,[
            'nama_kategori'=>'required|max:20',
            'deskripsi'    =>'required|max:50',
        ]);
        $categories->update($request->all());
        return redirect()->route('categories.index')->with('update','successfully add category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $categories=Categories::find($id);
       $categories->delete();
       return redirect()->route('categories.index')->with('delete','successfully delete category');
    }

    public function datatable()
    {
       $categories=Categories::query();
       return Datatables::of($categories)
       ->addIndexColumn()
       ->addColumn('foto',function($categories){
          return '<img src="'.asset($categories->foto).'" height="32" width="32">';
      })
      ->addColumn('action',function($categories){
            return view('admin.button._action',[
                 'model' =>$categories,
                 'edit'  =>route('categories.edit',$categories->id),
                 'delete'=>route('categories.destroy',$categories->id)
            ]);
      })
      ->rawColumns(['foto','action'])
      ->make(true);
    }
}
