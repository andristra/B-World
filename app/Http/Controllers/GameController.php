<?php

public function index()
{
$i = DB::select('select count(*) as cnt from games', [1]);
$results = DB::select('select * from games',[$i]);

return view('gayms', ['results'=>$results]);
}