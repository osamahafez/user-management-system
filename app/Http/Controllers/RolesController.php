<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use DB;

class RolesController extends Controller
{
    
    public function index()
    {
        $roles = DB::table('users')
                ->where('admin', '=', 0)
                ->join('roles', 'users.id', '=', 'roles.user_id')
                ->select('users.name', 'roles.*')
                ->orderBy('created_at', 'DESC')
                ->paginate(20);

        return view('roles.index', compact('roles'));
    }

    public function show($id)
    {
        $role = DB::table('users')
                ->where('admin', '=', 0)
                ->join('roles', 'users.id', '=', 'roles.user_id')
                ->select('users.name', 'roles.*')
                ->first();
        return $role;
    }

}
