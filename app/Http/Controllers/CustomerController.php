<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return $customer;
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return $customer;
    }

    public function store($code_customer = null , $email = null , $country = null , $city = null,$address=null ,$contact_number = null)
    {
        $customer=  new Customer();
        $customer -> code_customer = $code_customer;
        $customer -> email = $email;
        $customer -> country = $country;
        $customer -> city = $city;
        $customer -> address = $address;
        $customer -> contact_number = $contact_number;
        $customer -> save();
        return $customer;
    }

    public function edit($id,$nis=null,$nama=null,$kelas=null,$jml=null)
    {
        $customer = Customer::find($id);
        $customer -> nis =$nis ;
        $customer -> nama  =$nama;
        $customer -> kelas = $kelas;
        $customer -> jml  = $jml;
        $customer -> save();
        return $customer;
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer ->delete();
        return $customer;
    }
}
