<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SongList extends Component
{
    //add an attribute songs
    public $songs = [];
    /**
     * Create a new component instance.
     */
    public function __construct($songs=[])
    {
        //
       $this->songs=$songs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.song-list');
    }
}
