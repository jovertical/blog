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
     * It can be: default, wide, clean
     *
     * @var string
     */
    public $variant;

    /**
     * Create a new component instance.
     *
     * @param bool $variant It can be: default, wide, clean
     */
    public function __construct($variant = 'default')
    {
        $this->variant = $variant;
    }

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
