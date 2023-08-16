<?php

namespace App\Http\Controllers;
use resources\views\Register;
use Illuminate\Http\Request;

class Login extends Controller
{
    
    public function index(){
        $data['title'] = 'Login';
        return view ('login.index', $data);
        
    }
}
