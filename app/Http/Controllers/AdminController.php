<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $users_count = User::where('admin', 0)->count();
            return view('adminPanel', compact('users_count'));
        }
        else {
            return redirect('/home');
        }
    }

}
