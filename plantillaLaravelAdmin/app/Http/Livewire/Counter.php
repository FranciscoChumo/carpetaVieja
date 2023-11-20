<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Frutas;
class Counter extends Component
{
    
    
  
 
    public function render()
    {
        $frutas=Frutas::all();
        return view('livewire.counter', compact('frutas'));
    }

    public function delete($id){
    
        $fruta= Frutas::find($id);
        $fruta->delete();

    }
}
