<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Yajra\Datatables\Datatables;
class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.buyer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $buyer=User::find($id);
        return view('admin.buyer.edit',compact('buyer'));
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
        $buyer=User::find($id);
        $buyer->update($request->all());
        return redirect()->route('buyer.index')->with('update','successfully update buyer');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buyer=User::find($id);
        if(!$buyer) return redirect()->back();
        $buyer->delete();
        return redirect()->route('buyer.index')->with('delete','successfully delete buyer');

    }

    public function datatable(){
      $buyer=User::query();
      return Datatables::of($buyer)
      ->addIndexColumn()
      ->addColumn('action',function($buyer){
          return view('admin.button._action',[
            'model' =>$buyer,
            'edit'  =>route('buyer.edit',$buyer->id),
            'delete'=>route('buyer.destroy',$buyer->id),
          ]);
      })
      ->addColumn('payment',function($buyer){
          if($buyer->payment==NULL){
              return 'not yet paid';
          }else{
            return  '<img src="'.asset('payment/'.$buyer->payment).'" height="32" width="32">';

          }

    })
      ->rawColumns(['action','payment'])
      ->make(true);
    }
}
