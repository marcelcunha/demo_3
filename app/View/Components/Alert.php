<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type = 'success')
    {
        switch ($type) {
            case 'success':
                $this->color = 'green';
                break;
            case 'disaster':
                $this->color = 'red';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
