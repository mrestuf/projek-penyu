<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class XenditWebhookController extends Controller
{
  
  public function webhook(Request $request)
  {
    $data = $request->all();

    DB::beginTransaction();
    try {
      Transaction::where('external_id', $data['external_id'])->update([
        'status' => $data['status']
      ]);

      DB::commit();
    } catch (\Throwable $th) {
      DB::rollBack();
      throw $th;
    }
    
  }
  
}
