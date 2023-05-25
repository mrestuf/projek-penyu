<?php

namespace App\Http\Controllers;

// use App\Models\Transaction;
// use Illuminate\Http\Request;

class PegawaiController extends Controller
{
  
  public function index()
  {
    return view('dashboard.pegawai.contents.index');
  }

//   public function purchasesList(Request $request)
//   {

//     $user = $request->user();

//     $transactions = Transaction::where('user_id', $user->id)->with('user', 'wisata')->get();
  
//     return view('dashboard.user.contents.purchases-list', compact('transactions'));
//   }

}
