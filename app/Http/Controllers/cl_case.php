<?php 

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class cl_case extends Controller
{
    public function index($id)
    {
        $detailArr = DB::table('cl_case')->where('client_id',$id)->where('delete_status',0)->get();
        $detailArr2 = DB::table('client')->where('id',$id)->where('delete_status',0)->get();
        return view('case_details',compact('detailArr','detailArr2'));
    } 

    public function create(Request $request,$id)
    {  
        $caseArr = DB::table('client')->where('id',$id)->get();
        // echo $caseArr;
        return view('create_case',compact("caseArr"));
        // return view('create_case');   
    }
 
    public function store(Request $request)
    {        
        if (DB::table('client')->where('id', '=',$request->input('client_id'))->exists()) {
            
            DB::table('cl_case')
                ->insert([
                    'client_id' => $request->input('client_id'),
                    'case_subject' => $request->input('case_subject'),
                    'case_desc' => $request->input('case_desc'),
                    'case_type' => $request->input('case_type'),
                ]);
                // echo $client_id;
            // return $request->input();
            // return $request->input();

            $request->session()->flash('msg','User found DATA SAVED SUCCESSFULLY!!....');
            return redirect('client_show');
            
        }
        else{
            $request->session()->flash('msg','User not found....');
            return redirect('create_case');

        }
        
        // // DB::table('client')->save();
    }

    public function show(LMS $lMS)
    {
        // $clientArr = DB::table('client')->get();
        $caseArr = DB::table('cl_case')->where('delete_status', 0)->get();
        
        
        // echo $caseArr;
        // //clientArr is the array to store all the data from client table
        // return view('client',compact("clientArr"));   
        // //compact function will pass the clientArr to view
        return view('case',compact("caseArr"));
    }

    public function edit(LMS $lMS,$id)
    {
        $caseArr = DB::table('cl_case')->where('id',$id)->where('delete_status',0)->get();
        // echo $caseArr;
        return view('case_edit',compact("caseArr"));   
    }

    public function update(Request $request, LMS $lMS, $id)
    {
        // if (DB::table('client')->where('id', '=','client_id')->exists()) {
        DB::table('cl_case')
              ->where('id', $id)
              ->update([
                  'client_id' => $request->input('client_id'),
                  'case_subject' => $request->input('case_subject'),
                  'case_desc' => $request->input('case_desc'),
                  'case_type' => $request->input('case_type'),
                ]);
        
        // $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        // return redirect('case_show');
        //     }

            // else{

            //     $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
            //     return redirect('case_edit/{id}');
            // }

            $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        return redirect('case_show');
    }

    public function destroy(Request $request, LMS $lMS,$id) //we are getting id from url so we can use it here
    {
        DB::table('cl_case')
        ->where('id',$id)
        ->update([
            'delete_status'=>'1',
        ]);
                $invoiceArr=DB::table('invoice')->where('case_id',$id)->get('id');
                DB::table('invoice')
                ->where('case_id',$id)
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
                    echo "<br>";
                    // DB::table('invoice')->where('id',$temp2)->delete(); 
                }
                // DB::table('cl_case')->where('id',$id)->delete(); 
                
        
        $request->session()->flash('msg','All Of the DATA DELETED SUCCESSFULLY!!....');
        return redirect('case_show');
        
    }
}
