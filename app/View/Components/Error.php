<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Error extends Component
{
    public string $error;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $error){
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.error');
    }
}
