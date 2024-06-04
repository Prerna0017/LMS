<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class invoice extends Controller
{
    public function index()
    {
        
    }

    public function create(Request $request,$id)
    {  
        $invoiceArr = DB::table('cl_case')->where('id',$id)->get();
        echo $invoiceArr;
        return view('create_invoice',compact("invoiceArr"));   
    }

    public function store(Request $request)
    {
        // return $request->input();
        DB::table('invoice')
        ->insert([
            'case_id' => $request->input('case_id'),
            'subject' => $request->input('subject'),
            'payment_mode' => $request->input('payment_mode'),
            'payment_status' => $request->input('payment_status'),
            'amount' => $request->input('amount'),
        ]);

    // return $request->input();

    $request->session()->flash('msg','INVOICE SAVED SUCCESSFULLY!!....');
    return redirect('case_show');

        //### if (DB::table('client')->where('id', '=',$request->input('client_id'))->exists()) {
            
        //     DB::table('cl_case')
        //         ->insert([
        //             'client_id' => $request->input('client_id'),
        //             'case_desc' => $request->input('case_desc'),
        //             'case_type' => $request->input('case_type')
        //         ]);
        //         // echo $client_id;
        //     // return $request->input();
        //     // return $request->input();

        //     $request->session()->flash('msg','User found DATA SAVED SUCCESSFULLY!!....');
        //     return redirect('case_show');
            
        // }
        // else{
        // //     // echo "User not found....";

        //     $request->session()->flash('msg','User not found....');
        //     return redirect('create_case');

        // ###}
        
        // // DB::table('client')->save();
    }

    public function show(LMS $lMS)
    {
        // $clientArr = DB::table('client')->get();
        //#$caseArr = DB::table('cl_case')->get();
        $invoiceArr = DB::table('invoice')->where('delete_status', 0)->get();
        // echo $caseArr;
        // //clientArr is the array to store all the data from client table
        // return view('client',compact("clientArr"));   
        // //compact function will pass the clientArr to view
        return view('invoice',compact("invoiceArr"));
    }

    public function edit(LMS $lMS,$id)
    {
        $invoiceArr = DB::table('invoice')->where('id',$id)->get();
        echo $invoiceArr;
        return view('invoice_edit',compact("invoiceArr"));   
    }

    public function update(Request $request, LMS $lMS, $id)
    {
        // if (DB::table('client')->where('id', '=','client_id')->exists()) {
        DB::table('invoice')
              ->where('id', $id)
              ->update([
                // 'case_id' => $request->input('case_id'),
                'subject' => $request->input('subject'),
                'payment_mode' => $request->input('payment_mode'),
                'payment_status' => $request->input('payment_status'),
                'amount' => $request->input('amount')
               ]);

               $request->session()->flash('msg','INVOICE UPDATED SUCCESSFULLY!!....');
               return redirect('invoice_show');
        // $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        // return redirect('case_show');
        //     }

            // else{

            //     $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
            //     return redirect('case_edit/{id}');
            // }

            //#$request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        //# return redirect('case_show');
    }

    public function destroy(Request $request,LMS $lMS,$id) //we are getting id from url so we can use it here
    {

        DB::table('bill')
        ->where('invoice_id',$id)
        ->update([
            'delete_status'=>'1',
        ]);
        DB::table('invoice')
        ->where('id',$id)
        ->update([
            'delete_status'=>'1',
        ]);
        $request->session()->flash('msg','DATA DELETED SUCCESSFULLY!!....');

        return redirect('invoice_show');   
    }
}
