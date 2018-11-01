<?php

namespace App\Http\Controllers\Admin;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $transaction=Transaction::findOrFail($id);
        return view('admin.transaction.edit',compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $transaction=Transaction::find($id);
        $transaction->update($request->all());
        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction=Transaction::find($id);
        $transaction->delete();
        return redirect()->route('transaction.index');
    }

    public function datatable()
    {
        $transaction=Transaction::query();
        return Datatables::of($transaction)
        ->addIndexColumn()
        ->addColumn('user',function($transaction){
            return $transaction->user->name;
        })
        ->addColumn('product',function($transaction){
          return $transaction->product->name_product;
        })
        ->addColumn('action',function($transaction){
           return view('admin.button._action',[
                    'model' =>$transaction,
                    'edit'  =>route('transaction.edit',$transaction->id),
                    'delete'=>route('transaction.destroy',$transaction->id),
           ]);
        })
        ->addColumn('total',function($transaction){
            return $transaction->qty*$transaction->order_total;
        })
        ->addColumn('status_buyer',function($transaction){
              $transaksi=$transaction->status;
              if($transaksi==0){
                  return  'unprocessed';
              }else{
                  return  'been processed';
              }
         })
        ->rawColumns(['user','product','action','total','status_buyer'])
        ->make(true);

    }
}
