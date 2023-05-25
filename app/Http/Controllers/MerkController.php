<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerkController extends Controller
{
    function index(){
        return view('pages.merk.index');
    }
}
