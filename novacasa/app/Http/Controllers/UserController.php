<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile() {
    	$user = Auth::user();
    	return view('profile', [
   			'user' => $user
   		]);
    }

    public function update(Request $request) {
    	$user = Auth::user();
    	$user->name = $request->get('name');
    	$user->email = $request->get('email');
    	if (strlen($request->get('password')) > 0) {
    		$user->password = password_hash($request->get('password'), PASSWORD_DEFAULT);
    	}
    	$user->save();
    	return redirect()->route('profile');
    }
}
