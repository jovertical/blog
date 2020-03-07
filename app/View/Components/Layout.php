<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * List of navigation links
     *
     * @var array<string>
     */
    public $links = ['articles', 'tutorials', 'talks', 'projects'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
