<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function form() {
		return view('register');
	}

	public function welcome(Request $request) {
		// dd($request);
		return view('welcome');
	}

	public function welcome_post(Request $request) {
		// dd($request->all());
		$data = $request->all();
		return view('welcome', ['data' => $data]);
	}    
}
