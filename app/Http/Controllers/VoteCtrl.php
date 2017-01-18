<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class VoteCtrl extends Controller
{
    public function index() {
   
   if (Auth::user())
	{
			return view('vote');
	}
	return redirect('/game');
	
}

public function input(Request $request) {
	
	$validator = Validator::make($request->all(), [
	'selection' =>'required|max:6',
	]);
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}
	$vote = new \App\Vote;
	$vote->game_id=$request->selection;
	$vote->user_id=Auth::user()->id;
	$vote->save();
	return redirect('/');
}

}
