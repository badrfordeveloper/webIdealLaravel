<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $page;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page)
    {

        
        $this->page = $page;
        
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header',compact('page'));
    }
}
