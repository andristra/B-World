<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PurCtrl extends Controller
{
    
	
	 public function index() {
   
   if (Auth::user())
	{
			return view('purchase');
	}
	return redirect('/game');
	}
	
	public function input(Request $request) {
	
	$validator = Validator::make($request->all(), [
	'stuff' =>'required|max:6',
	]);
	if($validator->fails()){
		return back()
			->withInput()
			->withErrors($validator);
	}
	$purchase= new \App\Purchase;
	$purchase->user_id=Auth::user()->id;
	$purchase->inventory_id=\App\game::find($request->stuff)->items()->wherepurchased_n(0)->whererented_n(0)->first()->id;
	$purchase->save();
	
	$item=\App\Item::find($purchase->inventory_id);
	$item->purchased_n = 1;
	$item->save();
	return redirect('/');
}
	
}
