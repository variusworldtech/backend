<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KycController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kyc');
    }
    public function residence()
    {
        return view('kyc2');
    }
    public function contact()
    {
        return view('kyc3');
    }
}
