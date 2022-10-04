<?php

namespace App\Http\Livewire;

use App\Models\Tecnico;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MostrarTecnicos extends Component
{
    protected $listeners = ['eliminarTecnico'];

    public function eliminarTecnico(Tecnico $tecnico){
        $tecnico->delete();
        
    }
    public function render()
    {
        $tecnicos = Tecnico::paginate(5);
    
        return view('livewire.mostrar-tecnicos',[
            'tecnicos'=>$tecnicos
        ]);
    }
}
