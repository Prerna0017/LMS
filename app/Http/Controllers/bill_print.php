<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class bill_print extends Controller
{
    public function index()
    {
        
    }

    public function create(Request $request,$id)
    {  
        // $invoiceArr = DB::table('cl_case')->where('id',$id)->get();
        // echo $invoiceArr;
        // return view('create_invoice',compact("invoiceArr"));   
        return view('create_bill');   
    }

    public function store(Request $request)
    {
        
        // DB::table('invoice')
        // ->insert([
        //     'case_id' => $request->input('case_id'),
        //     'subject' => $request->input('subject'),
        //     'payment_mode' => $request->input('payment_mode'),
        //     'payment_status' => $request->input('payment_status'),
        //     'amount' => $request->input('amount'),
        // ]);


    // $request->session()->flash('msg','INVOICE SAVED SUCCESSFULLY!!....');
    // return redirect('case_show');

    }

    public function show(LMS $lMS)
    {
        $billArr = DB::table('bill')->get();
        return view('bill_print',compact("billArr"));
    }

    public function edit(LMS $lMS,$id)
    {
        // $invoiceArr = DB::table('invoice')->where('id',$id)->get();
        // echo $invoiceArr;
        // return view('invoice_edit',compact("invoiceArr"));   
    }

    public function update(Request $request, LMS $lMS, $id)
    {
        // DB::table('invoice')
        //       ->where('id', $id)
        //       ->update([
        //         // 'case_id' => $request->input('case_id'),
        //         'subject' => $request->input('subject'),
        //         'payment_mode' => $request->input('payment_mode'),
        //         'payment_status' => $request->input('payment_status'),
        //         'amount' => $request->input('amount')
        //        ]);

        //        $request->session()->flash('msg','INVOICE UPDATED SUCCESSFULLY!!....');
        //        return redirect('invoice_show');
        
    }

    public function destroy(Request $request,LMS $lMS,$id) //we are getting id from url so we can use it here
    {
        DB::table('bill')->where('id',$id)->delete();   
        $request->session()->flash('msg','DATA DELETED SUCCESSFULLY!!....');

        return redirect('bill_show');   
    }
}
