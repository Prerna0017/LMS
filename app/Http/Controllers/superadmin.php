<?php

namespace App\Http\Controllers;

use App\Models\LMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class superadmin extends Controller
{
    
    public function numbers()
    {
        $adminArr = DB::table('admin')->where('delete_status', 0)->get();
        
        $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();

        return view('SAdashboard',compact('adminArr','financialArr'));


    }

    public function index(Request $request)
    {
        if ((DB::table('superadmin')->where('email', '=',$request->input('email'))->exists())&&(DB::table('superadmin')->where('password', '=',$request->input('password'))->exists())){
            // $superArr=DB::table('superadmin')->where('email', '=',$request->input('email'))->get();
            $request->session()->flash('msg1',' password SUCCESSFULLY!!....');
            // return redirect('handleAdminData(SA)');
        
       $request->session()->flash('msg2',' looged in SUCCESSFULLY!!....');
         return redirect('SAdashboard');
        }else if((DB::table('admin')->where('email', '=',$request->input('email'))->exists())&&(DB::table('admin')->where('password_admin', '=',$request->input('password'))->exists())){
            $adminArr=DB::table('admin')->where('email', '=',$request->input('email'))->get();
            // $request->attributes->add(['adminArr' => $request->adminArr]);
            // return view('Adashboard', ['adminArr' =>DB::table('admin')->where('email', '=',$request->input('email'))->get()]);
            return redirect('Adashboard');
        }
        
    }

    
    public function create()
    {
        //
        return view('superadmin');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'Email'=> 'required',
            'password'=> 'required|min:8|required_with:password_confirm|same:password_confirm|alphanum',
            'password_confirm'=> 'required|required_with:password|same:password|min:8',
        ]);

        DB::table('superadmin')->insert([
            'email' => $request->input('Email'),
            'password' => $request->input('password'),
            'password_confirm' => $request->input('password_confirm')
        ]);
        $request->session()->flash('msg','DATA SAVED SUCCESSFULLY!!....');
        return redirect('superadmin');
    }

    
    public function show()
    {
        //
        // return view('superadmin')->with('regArr',Register::all());
        // echo $regArr;


        $regArr = DB::table('superadmin')->where('delete_status', 0)->get();
        return view('superadmin',compact("regArr")); 
    }

    
    public function edit(register $register)
    {
        //
    }

   
    public function update(Request $request, register $register)
    {
        //
    }

   
    public function destroy(register $register)
    {
        //
    }

    
}
