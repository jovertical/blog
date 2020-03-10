<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * The name of the icon, see blade file for possible values.
     *
     * @var string
     */
    public $name;

    /**
     *  The width x height of the component, computed based on the size property.
     *
     * @var array<string, number>
     */
    public $dimensions;

    /**
     * Create a new component instance.
     *
     * @param string $name The name of the icon, see blade file for possible values.
     * @param string $size Possible values: small, medium, large
     *
     * @return void
     */
    public function __construct($name, $size = 'medium')
    {
        $this->name = $name;

        $dimensions = [
            'small' => [16, 16],
            'medium' => [20, 20],
            'large' => [28, 28],
            'extra-large' => [36, 36],
        ];

        $this->dimensions = $dimensions[$size] ?? $dimensions['medium'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.icon');
    }
}
