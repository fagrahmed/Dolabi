<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert (Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $gender = $request->input('gender');

        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'gender'=>$gender);
        /* DB:: table('accounts')->insert($data); */
        $id = DB::table('accounts')->insertGetId($data);

        foreach($data as $key=> $value) {
            echo "$key: $value <br>";
        }

    }

}
