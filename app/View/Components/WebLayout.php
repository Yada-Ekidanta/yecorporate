<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WebLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $description;
    public $keywords;
    public function __construct($title,$description,$keywords)
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('themes.web.desktop.main');
    }
}
