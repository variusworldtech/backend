<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
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
    public function index() {
       
        return view('buy');    
    }

    public function purchaseType($id) {
         
        switch ($id) {
            case '1':
                $amount = 100000;
                break;

            case '2':
                $amount = 500000;
                break;

            case '3':
                $amount = 750000;
                break;
        }
        return view('tokenPurchase', ['amount' => $amount]);
    }
}
