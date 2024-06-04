<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class admin extends Controller
{
//     public function numbers()
//     {
//         $clientArr = DB::table('client')->where('delete_status', 0)->get();
        
//         $caseArr = DB::table('cl_case')->where('delete_status', 0)->get();

//         $billArr = DB::table('bill')
//         ->where('delete_status', 0)
//         ->where('payment_status','Pending')
//         ->get();

//         $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();

//         // $adminArr= app('request')->get('adminArr');
// // echo $adminArr;
//         return view('Adashboard',compact('clientArr','caseArr','billArr','financialArr'));


//     }

    public function index(Request $request)
    {
       
    if ((DB::table('add_admins')->where('email', '=',$request->input('email'))->exists())&&(DB::table('add_admins')->where('password_admin', '=',$request->input('password_admin'))->exists()))
    {
            $request->session()->flash('msg1',' password SUCCESSFULLY!!....');
            // return redirect('handleAdminData(SA)');
        
       $request->session()->flash('msg2',' looged in SUCCESSFULLY!!....');
         return redirect('handleAdminData(SA)');
        }
    }


    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //error handling
        $request->validate([
            'name'=>'max:25|regex:/^[a-z A-Z]+$/u',
            'dob'=>'date|before:-18 years',
            'pan'=> 'regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
            'aadhar'=>'min:12|max:12|regex:/^[0-9]+$/u',
            'phone'=>'max:10|min:10|regex:/^[0-9]+$/u'
        ]);

        DB::table('admin')->insert([
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'pan' => $request->input('pan'),
            'phone' => $request->input('phone'),
            'aadhar' => $request->input('aadhar'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password_admin' => $request->input('password_admin')
        ]);
        
        $request->session()->flash('msg','DATA SAVED SUCCESSFULLY!!....');
        return redirect('handleAdminData(SA)');
    }

    public function show(admin $admin)
    {
        // return view('handleAdminData(SA)')->with('addArr',AddAdmin::all());
        $addArr = DB::table('admin')->where('delete_status', 0)->get();
        return view('handleAdminData(SA)',compact("addArr"));
    }

    
    public function edit(admin $admin,$id)
    {
        $addArr = DB::table('admin')->where('id',$id)->get();
        // echo $addArr;
        return view('editAdmin',compact("addArr"));
        // return view('editAdmin')->with('addArr',addAdmin::find($id));
    }

    
    public function update(Request $request, admin $admin,$id)
    {
        // $res = addAdmin::find($request->id);

        //error handling
        //error handling
        $request->validate([
            'name'=>'max:25|regex:/^[a-z A-Z]+$/u',
            'dob'=>'date|before:-18 years',
            'pan'=> 'regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
            'aadhar'=>'min:12|max:12|regex:/^[0-9]+$/u',
            'phone'=>'max:10|min:10|regex:/^[0-9]+$/u'
        ]);

        //storing of data
        DB::table('admin')
        ->where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'pan' => $request->input('pan'),
            'phone' => $request->input('phone'),
            'aadhar' => $request->input('aadhar'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password_admin' => $request->input('password_admin')
        ]);

        // $res->save();
        $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        return redirect('handleAdminData(SA)');
    }

    
    public function destroy(admin $admin,$id)
    {
        DB::table('admin')
        ->where('id',$id)
        ->update([
            'delete_status'=>'1',
            ]);   
        return redirect('handleAdminData(SA)');
        // admin::destroy(array('id',$id));
        // return redirect ('handleAdminData(SA)');
    }
}
