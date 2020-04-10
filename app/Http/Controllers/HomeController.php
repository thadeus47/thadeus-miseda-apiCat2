<?php

namespace App\Http\Controllers;

use App\Fee;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('miseda.welcome');
    }
    public function display() {
        $fees = Fee::has('students')->get();
        return view('miseda.feePayments')->with('fees',$fees);
    }
}
