<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\regis;

class RegisController extends Controller
{
    //

    public function reg(Request $request)
    {
        $regis = new regis();
        $regis->f_name = $request->f_name;
        $regis->l_name = $request->l_name;
        $regis->email = $request->email;
        $regis->password = $request->password;
        $regis->c_password = $request->c_password;

        if( $regis->password==$regis->c_password) {


            $regis->save();

            return view('order');
        }

        else{



        }

    }

    public function viewreg()
    {

        return view('regis');
    }
    public  function  loginbd(Request $request){
        $c=0;
        $email= $request->input('email');
        $pass =$request->input("password");
        $details = regis::where('email', $email)->get();

        foreach ($details as $value) {
            if ($email == $value['email'] && $pass == $value['password']) {
               // $request->session()->put('user', $email);
               // $request->session()->put('pass', $pass);
               // $request->session()->put('id', $value['id']);


                return redirect("/create");

            }
        }
        if ($c == 0) {
            //$request->session()->put('user', $email);
           // $request->session()->put('pass', $pass);
           // $request->session()->put('id', $c);

            return redirect("/loginpage");


        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect("/login1");
    }


}
