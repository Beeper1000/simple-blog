<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{

    public $post;
    public $leading;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($leading, $post)
    {
        $this->post = $post;
        $this->leading = $leading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
