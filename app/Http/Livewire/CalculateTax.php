<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Tax;
use Livewire\Component;

class CalculateTax extends Component
{
    public $products = "";
    public $countries = "";
    public $states = "";
    public $cities = "";
    public $product = "";
    public $country = "";
    public $state = "";
    public $city = "";
    public $price = 0.0;
    public $tax_city = 0.0;
    public $tax_country = 0.0;
    public $tax_state = 0.0;
    public $tax_local = 0.0;
    public $tax_global = 0.0;

    public function show()
    {
        $this->tax_local = ($this->tax_city / 100) * $this->price;
        $this->tax_global = (($this->tax_country + $this->tax_state) / 100) * $this->price;
    }

    public function mount()
    {
        $this->products = Product::all()->pluck("name")->implode(",");
        $this->countries = Tax::whereType("country")->pluck("name")->implode(",");
        $this->states = Tax::whereType("state")->pluck("name")->implode(",");
        $this->cities = Tax::whereType("city")->pluck("name")->implode(",");

        $this->product = Product::all()->pluck("name")->first();
        $this->country = Tax::whereType("country")->pluck("name")->first();
        $this->state = Tax::whereType("state")->pluck("name")->first();
        $this->city = Tax::whereType("city")->pluck("name")->first();

        $this->price = Product::all()->pluck("price")->first();
        $this->tax_country = Tax::whereType("country")->pluck("tax")->first();
        $this->tax_state = Tax::whereType("state")->pluck("tax")->first();
        $this->tax_city = Tax::whereType("city")->pluck("tax")->first();
    }

    public function render()
    {
        return view('livewire.calculate-tax')->extends("layouts.auth");
    }
}
