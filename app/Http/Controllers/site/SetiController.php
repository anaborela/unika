<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetiController extends Controller
{
    public function seti(){
        return view('front.seti');
    }
}
