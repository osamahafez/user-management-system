<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index() {
        
        if(Auth::guest()) {
            return view('welcome');
        }
        else {
            if(Auth::user()->admin == 1) {
                return redirect('/admin-panel');
            }
            else {
                return redirect('/home');
            }
        }
       
    }
}
