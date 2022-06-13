<?php

namespace App\Http\Livewire;

use App\Models\Tax;
use Livewire\Component;

class ManageTax extends Component
{
    public $tax = 0.0;
    public $name = "";
    public $type = "";
    public $taxes = [];

    public function store()
    {
        $this->validate([
            "name" => ["required", "max:63"],
            "tax" => ["required", "numeric"],
            "type" => ["required", "in:country,city,state"],
        ]);

        Tax::create([
            "name" => $this->name,
            "tax" => $this->tax,
            "type" => $this->type
        ]);

        $this->tax = 0.0;
        $this->type = "";
        $this->name = "";
        $this->taxes = Tax::all();
    }

    public function mount()
    {
        $this->taxes = Tax::all();
    }

    public function render()
    {
        return view('livewire.manage-tax')->extends("layouts.auth");
    }
}
