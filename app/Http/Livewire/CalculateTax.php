<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CalculateTax extends Component
{
    public $products = [];
    public $countries = [];
    public $states = [];
    public $cities = [];
    public $product = "";
    public $country = "";
    public $state = "";
    public $city = "";

    public function render()
    {
        return view('livewire.calculate-tax');
    }
}
