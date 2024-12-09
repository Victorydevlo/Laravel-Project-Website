<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductForm extends Component
{

    public $product;
    public $producttypes; 

    public function __construct($product, $producttypes)
    {
        $this->product=$product;
        $this->producttypes=$producttypes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-form');
    }
}
