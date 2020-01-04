<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class CustomerController extends Controller
{
    //

    public function index()
    {
        $customers=customer::all();
        return view('adminview')->with('customers',$customers);
    }


    public function viewpage()
    {

        return view('create');
    }


    public function store(Request $request)
    {
        $customer=new customer();
        $customer->c_name=$request->c_name;
        $name=$request->c_name;
        $customer->c_eid=$request->c_eid;
        $eid=$request->c_eid;
        $customer->c_address=$request->c_address;
        $customer->c_phone=$request->c_phone;
        $customer->cylinder_company=$request->cylinder_company;
        $customer->cylinder_weight=$request->cylinder_weight;
        $customer->cylinder_number=$request->cylinder_number;

        $customer->save();
        if($request->cylinder_company=='jamuna'){
            $calculation= 1000* (int)$request->cylinder_number*(int)$request->cylinder_weight;

        }
        else
            {
                $calculation= 1200* (int)$request->cylinder_number*(int)$request->cylinder_weight;
            }


        return view("payment_form",compact('calculation','name','eid'));


    }


    public function cus()
    {
        $customers=customer::all();
        return view('cusbill')->with('customers',$customers);
    }


    public function message(Request $request)
    {
        $customer=new customer();
        $customer->c_name=$request->c_name;
        $name=$request->c_name;

        $customer->c_eid=$request->c_eid;
        $eid=$request->c_eid;




        $customer->cylinder_company=$request->cylinder_company;
        $c_company=$request->cylinder_company;

        $customer->cylinder_weight=$request->cylinder_weight;
        $c_weight=$request->cylinder_weight;

        $customer->cylinder_number=$request->cylinder_number;
        $c_quantity=$request->cylinder_company;
        $customer->save();


        return view("adminconfirm",compact('c_company','name','eid','c_weight','c_quantity'));


    }








}
