<?php

namespace App\View\Components;

use Closure;
use App\Models\Testmonial;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontTestmonialsComponent extends Component
{
    public $testmonials;
    public function __construct()
    {
        $this->testmonials = Testmonial::take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-testmonials-component');
    }
}
