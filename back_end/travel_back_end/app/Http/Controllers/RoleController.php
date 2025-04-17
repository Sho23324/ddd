<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        // return Role::all(['id','name']);
        $roles = Role::all();
        return response()->json($roles);
    }
}
