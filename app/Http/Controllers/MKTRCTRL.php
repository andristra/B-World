<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MKTRCTRL extends Controller
{
    
	public function index() {
    if (Auth::user())
	{
		$user = Auth::user();
	if ($user->admin==1)
		{
			return view('maketour');
		}
	else
		{
			return redirect('/game');
		}
	}
	return redirect('/game');
}


public function input(Request $request) {
	
	$validator = Validator::make($request->all(), [
	'obj' =>'required|max:6',
	'info' =>'required|max:255',
	]);
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}
	$tour = new \App\tournament;
	$tour->game_id=$request->obj;
	$tour->info_s=$request->info;
	$tour->save();
	return redirect('/');

}
}
