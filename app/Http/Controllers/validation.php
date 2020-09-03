<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Concerns\FormatsMessages;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class validation extends Controller
{
    public function index (Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $gender = $request->input('gender');

        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'gender'=>$gender);
        /* DB:: table('accounts')->insert($data); */

        

        foreach($data as $key=> $value) {
            echo "$key: $value <br>";
        }

        
         $validation= $request->validate([
            'name'=>'required | max: 30' , 
            'email'=> 'required',
            'password'=> 'required | min: 4', 'gender'=> 'required'
        ]);

        
       /*  if($validation->fails())
        {
            Session:: flash('error', $validation->messages()->first());
            return redirect()-> back()->withInput()->withErrors($validation); 
            return Redirect::to('/validation')->withInput()->withErrors($validation);
        }
        */
        print_r($validation);
        $id = DB::table('accounts')->insertGetId($data);

    }

}