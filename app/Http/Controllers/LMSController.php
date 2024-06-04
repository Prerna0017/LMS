<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LMSController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('create_client');   
    }

    public function store(Request $request)
    {
        //error handling
        $request->validate([
            'name'=>'max:25|regex:/^[a-z A-Z]+$/u',
            'coordinator_name'=>'max:25|regex:/^[a-z A-Z]+$/u',
            'dob'=>'date|before:-18 years',
            'contact'=>'max:10|min:10|regex:/^[0-9]+$/u',
        ]);

        DB::table('client')->insert([
            'name' => $request->input('name'),
            'coordinator_name' => $request->input('coordinator_name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'address' => $request->input('address')
        ]);
        
        // DB::table('client')->save();
        $request->session()->flash('msg','DATA SAVED SUCCESSFULLY!!....');
        return redirect('client_show');
    } 

    public function show(LMS $lMS)
    {
        $clientArr = DB::table('client')->where('delete_status', 0)->get();
        // echo $clientArr;
        //clientArr is the array to store all the data from client table
        return view('client',compact("clientArr"));
       
        //compact function will pass the clientArr to view
    }

    public function edit(LMS $lMS,$id)
    {
        $clientArr = DB::table('client')->where('id',$id)->get();
        // echo $clientArr;
        return view('client_edit',compact("clientArr"));   
    }
 
    public function update(Request $request, LMS $lMS, $id)
    {
        //error handling
        $request->validate([
            'name'=>'max:25|regex:/^[a-z A-Z]+$/u',
            'coordinator_name'=>'max:25|regex:/^[a-z A-Z]+$/u',
            'dob'=>'date|before:-18 years',
            'contact'=>'max:10|min:10|regex:/^[0-9]+$/u',
        ]);
 
        DB::table('client')
              ->where('id', $id)
              ->update([
                'name' => $request->input('name'),
                'coordinator_name' => $request->input('coordinator_name'),
                'email' => $request->input('email'),
                'dob' => $request->input('dob'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address')
                ]);
        
        // DB::table('client')->save();
        $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        return redirect('client_show');          
    }

    public function destroy(Request $request,LMS $lMS,$id) //we are getting id from url so we can use it here
    {
        DB::table('client')
        ->where('id',$id)
        ->update([
            'delete_status'=>'1',
        ]); 

        $caseArr=DB::table('cl_case')->where('client_id',$id)->get('id');
        DB::table('cl_case')
        ->where('client_id',$id)
        ->update([
            'delete_status'=>'1',
        ]);
        foreach ($caseArr as $case){
            $temp1 = $case->id;
                echo $temp1;
                $invoiceArr=DB::table('invoice')->where('case_id',$temp1)->get('id');
                DB::table('invoice')
                ->where('case_id',$temp1)
                ->update([
                    'delete_status'=>'1',
                ]);
                echo $invoiceArr;
                foreach($invoiceArr as $invoice){
                    $temp2 = $invoice->id;
                    echo $temp2;
                    $billArr=DB::table('bill')->where('invoice_id',$temp2)->get('id');
                    DB::table('bill')
                    ->where('invoice_id',$temp2)
                    ->update([
                        'delete_status'=>'1',
                    ]);
                    echo $billArr;
                    foreach($billArr as $bill){
                        $temp3 = $bill->id;
                        echo $temp3;
                        // DB::table('bill')->where('id',$temp3)->delete(); 
                    }
                    // DB::table('invoice')->where('id',$temp2)->delete(); 
                }
                // DB::table('cl_case')->where('id',$temp1)->delete(); 
                echo "<br>";
        }
        // DB::table('client')->where('id',$id)->delete(); 

        $request->session()->flash('msg','All Of the DATA DELETED SUCCESSFULLY!!....');
        return redirect('client_show');
        
    }
}