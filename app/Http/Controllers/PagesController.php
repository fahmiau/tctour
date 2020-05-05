<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function transports(){
        return view('transports');
    }

    public function accomodation(){
        return view('accomodation');
    }

    public function package(){
        return view('package');
    }

    public function order(){
        return view('order.index');
    }

}
