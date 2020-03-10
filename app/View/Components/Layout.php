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
     * Navigation links will be hidden & become toggleable.
     *
     * @var bool
     */
    public $clean;

    /**
     * Create a new component instance.
     *
     * @param bool $clean Navigation links will be hidden & become toggleable.
     */
    public function __construct($clean = false)
    {
        $this->clean = $clean;
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
