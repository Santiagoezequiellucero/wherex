<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Venta;

class ShowHomes extends Component
{
    public function render()
    {   
        $cliente = Cliente::all();
        $producto = Producto::all();
        $venta = Venta::all();
        return view('livewire.show-homes');
    }
}
