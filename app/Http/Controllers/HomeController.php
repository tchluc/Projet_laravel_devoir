<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
 
    public function index()
    {
        $user = DB::table('users')->get();
        return view('admin.dashboard',['users' => $user]); 
    }
    public function destroy($id)
    {
        $deleted = DB::table('users')->where('id', '=', $id)->delete();
        
    }
}
