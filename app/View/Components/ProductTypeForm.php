<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductTypeForm extends Component
{
    public $productType;

    
    public function __construct($productType)
    {
        $this->productType = $productType;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.producttype-form');
    }
}
