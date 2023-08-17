<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Offcanvas extends Component
{

    public $types = [
        'left'      => 'offcanvas-start',
        'right'     => 'offcanvas-end',
        'top'       => 'offcanvas-top',
        'bottom'    => 'offcanvas-bottom',
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( public $id = null, public $align = 'left', public $button = '', public $title = '' )
    {
        $this->id = $id;
        $this->align = $this->types[$align] ?? $this->types['left'];
        $this->button = $button;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offcanvas');
    }
}
