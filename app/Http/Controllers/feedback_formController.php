<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feedback_formController extends Controller
{
    public function index(){
        return view('feedback_form');
    }
}
