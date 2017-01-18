<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adctrl extends Controller
{
    public function index() {
    if (Auth::user())
	{
		$user = Auth::user();
	if ($user->admin==1)
		{
			return view('admin');
		}
	else
		{
			return redirect('/game');
		}
	}
	return redirect('/game');
}
}
