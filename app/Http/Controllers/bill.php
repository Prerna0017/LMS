<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Dompdf\Dompdf;

class bill extends Controller
{
    public function index()
    {
    }

    public function create(Request $request,$id)
    {  
        // $clientId = 0;
        $caseArr = DB::table('cl_case')->where('id',$id)->where('delete_status',0)->get();
        // echo $caseArr;
        foreach($caseArr as $case){
            $clientId = $case -> client_id;
        }
        $clientArr = DB::table('client')->where('id',$clientId)->where('delete_status',0)->get();
        // echo $clientArr;
        // return view('create_invoice',compact("invoiceArr"));   
        return view('create_bill',compact('caseArr','clientArr'));   
    }

    public function store(Request $request,$id)
    {
        // return $request->input();
        DB::table('bill')
        ->insert([
            'case_id' => $request->input('case_id'),
            'bill_id' => $request->input('bill_id'),
            'subject' => $request->input('subject'),
            'payment_mode' => $request->input('payment_mode'),
            'payment_details' => $request->input('payment_details'),
            'amount' => $request->input('total'),
        ]);


    $request->session()->flash('msg','BILL SAVED SUCCESSFULLY!!....');
    
    $caseArr = DB::table('cl_case')->where('id',$id)->where('delete_status',0)->get();
    // echo $caseArr;
    foreach($caseArr as $case){
        $clientId = $case -> client_id;
    }
    $clientArr = DB::table('client')->where('id',$clientId)->where('delete_status',0)->get();
    $billArr = DB::table('bill')->where('case_id',$id)->where('delete_status',0)->get();
   
     return view('print_bill',compact('caseArr','clientArr','billArr')); 
    //  return redirect ('pdf');
    }

    public function show(LMS $lMS)
    {
        $billArr = DB::table('bill')->where('delete_status', 0)->get();
        return view('bill',compact("billArr"));
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
        DB::table('bill')
        ->where('id',$id)
        ->update([
            'delete_status'=>'1',
        ]);   
        $request->session()->flash('msg','DATA DELETED SUCCESSFULLY!!....');

        return redirect('bill_show');   
    }
}
