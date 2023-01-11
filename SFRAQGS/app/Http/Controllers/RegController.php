<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class RegController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $req){
        $data = array('name'=>$req->fname." ".$req->lname, 'email'=>$req->email,'password'=>Hash::make($req->pass));
      
        User::create($data);
    }
}
