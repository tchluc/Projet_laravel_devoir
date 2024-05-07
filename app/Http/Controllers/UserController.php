<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->get();
        return view('admin.dashboard', ['users' => $user]);
    }

    public function show()
    {
        $user = DB::table('users')->get();
        return view('\admin\Utilisateurs', ['users' => $user]);
    }

    public function store(Request $request)
    {
        
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
