<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GamCtrl extends Controller
{
  public function index()
{
$games = \App\Game::all();
    return view('game',compact('games'));
}
}
