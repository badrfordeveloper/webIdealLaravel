<?php



namespace App\View\Components;



use Illuminate\View\Component;



class Header extends Component

{

    public $page;
    public $post;

    /**

     * Create a new component instance.

     *

     * @return void

     */

    public function __construct($page,$post='')

    {



        

        $this->page = $page;
         $this->post = $post;

        

    }

    /**

     * Get the view / contents that represent the component.

     *

     * @return \Illuminate\View\View|string

     */

    public function render()

    {
        $page = $this->page;
        return view('components.header',compact('page'));

    }

}

