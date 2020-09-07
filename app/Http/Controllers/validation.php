<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\account;


class validation extends Controller
{
    public function signUp (Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password);
        

        foreach($data as $key=> $value) {
            echo "$key: $value <br>";
        }

        
         $validation= $request->validate([
            'name'=>'required | min :4 |max: 10' , 
            'email'=> 'required | email | regex:/^.+@.+$/i ',
            'password'=> 'required | min: 4 | max :15'
        ]);
        
        

        print_r($validation);
      //DB:: table('accounts')->insert($data);
      $id = DB::table('accounts')->insertGetId($data);
       
    }

    public function login(Request $request){
 
        $email = $request->input('email');
        $password = $request->input('password');

        $data=DB::select('select id from accounts where email=? and password=?',[$email,$password]);
        print_r($data);

        if (count($data)){
            echo "Logged in successfully";
        }
        else {
            echo "Error! please enter correct info";
        }



    }

    

}