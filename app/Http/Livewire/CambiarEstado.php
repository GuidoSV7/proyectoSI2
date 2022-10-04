<?php

namespace App\Http\Livewire;

use App\Models\Solicitud;
use Livewire\Component;

class CambiarEstado extends Component
{
    public $solicitud_id;
    public $estado;
    


 

    protected $rules = [
        'estado' => 'required|string',
        
     
        
    ];


    public function mount(Solicitud $solicitud){
        $this->solicitud_id = $solicitud->id;
        $this->estado = $solicitud->estado;
        

    }

    public function cambiarEstado(){
        $datos = $this->validate();


        //Encontrar el tecnico a editar
        $solicitud = Solicitud::find($this->solicitud_id);
        //asignar valores
        $solicitud->estado = $datos['estado'];
   
        //Guardar tecnico
        $solicitud->save();
        //redireccionar
        session()->flash('mensaje','Se actualizó correctamente');
        return redirect()->route('solicitudes.lista');
    }
    public function render()
    {
        return view('livewire.cambiar-estado');
    }
}
