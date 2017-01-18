<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class gameComposer
{
  //  public $games = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
   //     $this->games = \App\Game::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
		$games = \App\Game::all();
        $view->with('game',compact('games'));
    }
}