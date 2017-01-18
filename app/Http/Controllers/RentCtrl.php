<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RentCtrl extends Controller
{
   

   public function index() {
   
   if (Auth::user())
	{
			return view('rent');
	}
	return redirect('/game');
	}
	
	
	public function input(Request $request) {
	
	$validator = Validator::make($request->all(), [
	'thing' =>'required|max:6',
	]);
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}
	$rent = new \App\Rent;
	$rent->rented_at_d=date("Y/m/d");
	$rent->rate_2n=\App\game::find($request->thing)->rate;
	$rent->user_id=Auth::user()->id;
	$rent->inventory_id=\App\game::find($request->thing)->items()->wherepurchased_n(0)->whererented_n(0)->first()->id;
	$rent->save();
	
	$item=\App\Item::find($rent->inventory_id);
	$item->rented_n = 1;
	$item->save();
	return redirect('/');
}
	
}
