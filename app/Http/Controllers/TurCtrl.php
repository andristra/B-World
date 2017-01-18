<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use View;
class TurCtrl extends Controller
{
  public function index()
{
	if (Auth::user())
	{
$tournaments = \App\tournament::all();
	return View::make('tournaments')->with(compact('tournaments'));
	}
	return redirect('/game');
}
}
