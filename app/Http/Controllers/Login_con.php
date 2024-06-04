<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use DB;

class Login_con extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $r)
    {
        $Email=$r->Email;
        $password=$r->password;
        $password_confirm=$r->password_confirm;
        $check_email= Login::where('Email',$Email)->get();
        if(count($check_email)>0){
            return redirect('/index')->with('msg','Account Already  Exists !');
        }
        else{
        $login = new Login;

        $login->Email=$Email;
        $login->password=$password;
        $login->password_confirm=$password_confirm;

        $created = $login->save();

        if($created){

            return redirect('/index')->with('msg','Account Created Successfully !... Please Login!');
        }
    }
    }

    public function login()
    {
        return view('index');
    }

    public function check_user(Request $r)
    {
        $Email=$r->Email;
        $password=$r->password;

        $session = Login::where('Email',$Email)->where('password',$password)->get();
    
        if(count($session)>0){
            $r->session()->put('user_id',$session[0]->id);
            $r->session()->put('Email',$session[0]->Email);

            return redirect('/SAdashboard');
        }
        else{
            if (DB::table('admin')->where('email',$Email)->where('password_admin',$password)->exists()) {
                $session=DB::table('admin')->where('email',$Email)->where('password_admin',$password)->get();
                $r->session()->put('user_id',$session[0]->id);
                $r->session()->put('email',$session[0]->email);

                return redirect('/Adashboard');
            }
            else{
                return redirect ('/index')->with('msg','Email-Id and password mismatched');
            }
        }
    }

    public function protect(Request $r)
    {
        if($r->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{

                $clientArr = DB::table('client')->where('delete_status', 0)->get();
                
                $caseArr = DB::table('cl_case')->where('delete_status', 0)->get();
        
                $billArr = DB::table('bill')
                ->where('delete_status', 0)
                ->where('payment_status','Pending')
                ->get();
        
                $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();
        
                // $adminArr= app('request')->get('adminArr');
        // echo $adminArr;
                // return view('Adashboard',compact('clientArr','caseArr','billArr','financialArr'));
        
        
            
            $Email=$r->session()->get('Email');

            $capsule = array ('Email'=> $Email );
            return view('Adashboard',compact('clientArr','caseArr','billArr','financialArr','Email'));
            // return view('Adashboard',compact("Email"));

        }
    }
    

    public function logout(Request $r) {
        $r->session()->forget('user_id');
        $r->session()->forget('Email');
        return redirect('/index');
    }
} 
