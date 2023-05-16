<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wisata;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Xendit\Xendit;

class TransactionController extends Controller
{
  
  protected $token;

  public function __construct()
  {
    $this->token = env('XENDIT_API_KEY');
  }

  public function createInvoice(Request $request, $id)
  {
    Xendit::setApiKey($this->token);
    
    $wisata = Wisata::findOrFail($id);

    $params = [ 
      'external_id' => 'go-wisata' . uniqid(),
      'amount' => $request->price * $wisata->price,
      'description' => 'Invoice Demo Go-Wisata Pemesanan Tiket Wisata ' . $wisata->name_wisata, 
      'invoice_duration' => 86400, // Exp. 1 Day
      'currency' => 'IDR',
      "success_redirect_url" => 'https://3094-103-135-226-20.ngrok-free.app/user/purchases/list'
    ];

    
    DB::beginTransaction();
    try {
      $createInvoice = \Xendit\Invoice::create($params);
      
      $transaction = new Transaction([
        'user_id' => $request->user()->id,
        'wisata_id' => $wisata->id,
        'transaction_id' => $createInvoice['id'],
        'external_id' => $createInvoice['external_id'],
        'status' => $createInvoice['status'],
        'amount' => $createInvoice['amount'],
        'link_payment' => $createInvoice['invoice_url']
      ]);
      $transaction->save();

      DB::commit();
      return redirect()->away($createInvoice['invoice_url']);
    }catch (\Throwable $th) {
      DB::rollBack();

      throw $th;
    }
  }

}
