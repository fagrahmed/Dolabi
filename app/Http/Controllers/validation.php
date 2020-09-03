<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class validation extends Controller
{
    public function index (Request $request)
    {
        $validation = Validator:: make ($request->all(),[
            'name'=>'required[string] | max: 10' , 
            'email'=> 'required|email|regex:/(.*)@gmail|.com/i|unique:users',
            'password'=> 'required | min: 4', 'gender'=> 'required'
        ]);

        
        if($validation->fails())
        {
            /* Session:: flash('error', $validation->messages()->first());
            return redirect()-> back()->withInput()->withErrors($validation); */
            return Redirect::to('/validation')->withInput()->withErrors($validation);
        }

        print_r($validation);
    }

}
