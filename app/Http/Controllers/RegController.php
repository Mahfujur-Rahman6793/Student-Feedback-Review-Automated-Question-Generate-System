<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;
class RegController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $req){
        $data = array('name'=>$req->fname." ".$req->lname, 'email'=>$req->email,'password'=>Hash::make($req->pass));
       

        
      
        $user = User::create($data);
        if($user){
            if($req->role=="student"){
                $db=User::where('email', $req->email)->first();
                $student=array('user_id'=>$db->id, 'student_roll'=>$req->roleNo,'year_id'=>'1');
            
                Student::create($student);
            }
            
        }
        
        return redirect('login');
    }
}
