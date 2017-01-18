<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class inputGame extends Controller
{
public function index() {
    if (Auth::user())
	{
		$user = Auth::user();
	if ($user->admin==1)
		{
			return view('inputs');
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
	'name' =>'required|max:255',
	'url' =>'required|max:255',
	'genre' =>'required|max:255',
	'rate' => 'required|max:6'
	]);
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}
	$game = new \App\Game;
	$game->name_s=$request->name;
	$game->info=$request->url;
	$game->genre_s=$request->genre;
	$game->rate = $request->rate;
	$game->save();
	return redirect('/');
}


}
