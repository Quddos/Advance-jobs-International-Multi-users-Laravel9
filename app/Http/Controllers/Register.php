<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterAccount;
use resources\views\login;
use App\Models\User;
use Illuminate\Http\Request;


class Register extends Controller
{
    //  public function index(){
    //     $data['title']='Register Account';
    //     return view ('register.index, $data');
    //  }
    //  public function forgot(){
    //     $data['title']='Forgot password';
    //     return view ('password, $data');
    //  }
    public function index(){
        $data['title'] = 'Register Account';
        return view ('register.index', $data);
        
    }

    public function forgot(){
        $data['title']= 'Forgot Password';
        return view ('register.password-forgot', $data);
    }

    public function create(RegisterAccount $request){
        dd ($request -> all());
    }
}
