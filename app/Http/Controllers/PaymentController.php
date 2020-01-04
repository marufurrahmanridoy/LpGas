<?php

namespace App\Http\Controllers;

use App\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function order(Request $request)
    {
        $payment = new payment();
        $a_name=$request->input('a_name');
        $c_id=$request->input('c_id');
        $c_weight=$request->input('c_weight');
        $c_copmpany=$request->input('c_company');

        $all='name:'.$a_name.' cid:'.$c_id.' c_weight:'.$c_weight.' c_company:'.$c_copmpany;

        return view('qrcode',compact('all'));

    }

}
