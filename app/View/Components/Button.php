<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{

    /**
     * The button type
     *
     * @var string
     */
    public $type;

    /**
     * The button types.
     *
     * @var array
     */
    protected $types = [
        'primary'   => 'btn-primary',
        'secondary' => 'btn-secondary',
        'info'      => 'btn-info',
        'success'   => 'btn-success',
        'danger'    => 'btn-danger',
        'warning'   => 'btn-warning',
        'dark'      => 'btn-dark',
        'light'     => 'btn-light',
        'link'      => 'btn-link',
    ];

    public $title;
    public $link;
    public $target;
    public $extraClass;
    public $outline;
    public $icon;
    public $iconType = 'arrow-right';

    public $disabled;
    public $tabIndex;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type = 'primary',
        $title = null,
        $link = '#!',
        $target = '_self',
        $outline = false,
        $extraClass = '',
        $icon = null,
        $disabled = false
    ) {
        $this->type = $this->types[$type] ?? $this->types['primary'];
        $this->extraClass = $extraClass;
        $this->link = $link;
        $this->title = $title;
        $this->target = $target === '0' ? '_self' : $target;
        $this->icon = $icon;
        $this->outline = $outline;
        $this->disabled = $disabled;
    
        $this->applyExtraClass();
        $this->applyOutline();
        $this->applyIconStyles();
        $this->appplyDisableState();
    }
    
    private function applyExtraClass()
    {
        if ($this->extraClass) {
            $this->type .= ' ' . $this->extraClass;
        }
    }
    
    private function applyOutline()
    {
        if ($this->outline) {
            $this->type = str_replace('btn-', 'btn-outline-', $this->type);
        }
    }
    
    private function applyIconStyles()
    {
        if ($this->icon) {
            $this->type .= ' icon-link icon-link-hover';
            $this->iconType = ($this->icon == '1') ? $this->iconType : $this->icon;
        }
    }

    private function appplyDisableState()
    {
        if ($this->disabled) {
            $this->type .= ' disabled';
            $this->tabIndex = '-1';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return $this->view('components.button');
    }
}
