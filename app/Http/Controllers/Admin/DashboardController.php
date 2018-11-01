<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\User;
use PDF;
class DashboardController extends Controller
{
    public function index()
    {
        $transaction=Transaction::all();
        $user=User::all();
        return view('admin.dashboard',compact('transaction','user'));
    }

    public function cetak()
    {
        $transaction=Transaction::all();
        $pdf=PDF::loadView('cetak',['transactions'=>$transaction]);
        return $pdf->stream();
    }
}
