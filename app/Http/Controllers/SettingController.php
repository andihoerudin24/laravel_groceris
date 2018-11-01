<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class SettingController extends Controller
{
    public function index()
    {
         $user=Auth::user();
         return view('setting.index',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->back();
    }
}
