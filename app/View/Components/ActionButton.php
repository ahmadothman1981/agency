<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $color;
    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href , public string $type)
    {
        if($type == 'create'){
            $this->color = 'primary';
            $this->text =__('keywords.Add New');
        }else if($type == 'edit'){
            $this->color = 'success';
            $this->text = "<i class='fe fe-24 fe-edit'></i>";
        }else if($type == 'show'){
            $this->color = 'primary';
            $this->text = "<i class='fe fe-24 fe-eye'></i>";
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
