<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use View;
class GamCtrl extends Controller
{
  public function index()
{
$games = \App\Game::all();

    if (Auth::user())
	{
		$user = Auth::user();
	if ($user->admin==1)
		{
			return View::make('admin')->with(compact('games'));
		}

}
	return View::make('game')->with(compact('games'));
	
}


	public function root()
	{
			return view('game');
	}
}
