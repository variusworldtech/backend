<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index(){
        $user = \Auth::user();
        $tokens = $user->tokens;
        if (!empty($tokens)) {
            $user = \Auth::user();
            $tokensNum = $user->tokens[0]['amount'];
            $tokens = number_format($user->tokens[0]['amount']);
        }
        else {
            $tokens = 0;
        }
        $price = \App\Price::orderBy('id', 'desc')->first();
        $price = $price['price'];
        $value = number_format($price  * $tokensNum);
        return view('home', ['tokens' => $tokens, 'price' => $price, 'value' => $value]);
    }
}
