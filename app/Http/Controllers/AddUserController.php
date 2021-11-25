<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Carbon\Carbon;

class AddUserController extends Controller
{
    public function index()
    {
    	return view('admin.users.adduser');
    }
    public function userpost(Request $request)
    {
    	$request->validate([
    		'name' =>'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:8|confirmed',
    		'role' => 'required',
    	],[
    		'name.required' => 'Enter User Name',
    		'email.required' => 'Email Must Be Unique',
    		'password.required' => 'Password Must Be 8 digit',
    		'role.required' => 'Enter User Role'
    	]);
    	User::insert([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    		'role' => $request->role,
    		'created_at' => Carbon::now(),
    	]);
    	return back()->with('success','User Add Successfully');
    }
}
