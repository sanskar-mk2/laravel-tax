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
    public $tax_local = 0.0;
    public $tax_global = 0.0;

    public function mount()
    {
        $this->products = Product::all()->pluck("name")->implode(",");
        // $this->countries = implode(",", Tax::whereType("country")->get()->pluck("name"));
        // $this->states = implode(",", Tax::whereType("states")->get()->pluck("name"));
        // $this->cities = implode(",", Tax::whereType("city")->get()->pluck("name"));
        // $this->product = Product::all("name")->first();
        // $this->country = Tax::whereType("country")->get()->pluck("name")->first();
        // $this->state = Tax::whereType("state")->get()->pluck("name")->first();
        // $this->city = Tax::whereType("country")->get()->pluck("name")->first();
    }

    public function render()
    {
        return view('livewire.calculate-tax')->extends("layouts.auth");
    }
}
