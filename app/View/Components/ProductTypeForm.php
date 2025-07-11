<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductTypeForm extends Component
{
    public $producttype;

    
    public function __construct($producttype)
    {
        $this->producttype = $producttype;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-type-form');
    }
}
