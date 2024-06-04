<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class financial_year extends Controller
{
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('financial_year_create');
    }

    
    public function store(Request $request)
    {
        //error validation
        $request->validate([
            'created_by'=>'max:25|regex:/^[a-z A-Z]+$/u'
        ]);

        DB::table('financial_year')->insert([
            'default_status' => $request->input('default_status'),
            'created_by' => $request->input('created_by'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date')
        ]);
        
        // DB::table('client')->save();
        $request->session()->flash('msg','DATA SAVED SUCCESSFULLY!!....');
        return redirect('financial_year_show(SA)');
        // return $request->input();
    }

    public function show(financial_year $financial_year)
    {
        $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();
        return view('financial_year_show',compact("financialArr"));
        // return view('financial_year_show')->with('financial_yearArr',financial_year::all());
    }

    public function show2(financial_year $financial_year)
    {
        $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();
        return view('financial_year_show(SA)',compact("financialArr"));
        // return view('financial_year_show')->with('financial_yearArr',financial_year::all());
    }

    
    public function edit(financial_year $financial_year,$id)
    {
        $financialArr = DB::table('financial_year')->where('id',$id)->get();
        // echo $clientArr;
        return view('financial_year_edit',compact("financialArr"));  
        // return view('financial_year_edit')->with('financial_yearArr',financial_year::find($id));
    }

   
    public function update(Request $request, financial_year $financial_year,$id)
    {
        //error validation
        $request->validate([
            'created_by'=>'max:25|regex:/^[a-z A-Z]+$/u'
        ]);

        DB::table('financial_year')
              ->where('id', $id)
              ->update([
                    'default_status' => $request->input('default_status'),
                    'created_by' => $request->input('created_by'),
                    'from_date' => $request->input('from_date'),
                    'to_date' => $request->input('to_date')
                ]);
        
        // DB::table('client')->save();
        $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        return redirect('financial_year_show');
    }

   
    public function destroy(Request $request,financial_year $financial_year,$id)
    {
       DB::table('financial_year')
       ->where('id',$id)
       ->update([
        'delete_status'=>'1',
        ]); 
          
        $request->session()->flash('msg','DATA DELETED SUCCESSFULLY!!....');

        return redirect('financial_year_show(SA)');   
    }
}
