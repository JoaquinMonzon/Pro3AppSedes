<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect,Response,DB,Config;
use Datatables;

class UserController extends Controller
{
    public function index()
    {
    	return view('users');
    }
    public function userlist()
    {
    	$users = DB::table('users')->select('*');
    	return datatables()->of($users)
    		->make(true); 
    }
    public function userslista()
    {
    	$listado= User::all();
        //dd($listado);
    	return view('users_lista',compact('listado'));
    }
}
