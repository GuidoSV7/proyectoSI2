<?php

namespace App\Http\Livewire;

use App\Models\Tecnico;
use App\Models\User;
use App\Models\Solicitud;
use Livewire\Component;

class AsignarTecnico extends Component
{
    public $solicitud_id;
    public $tecnico_id;
    public $tecnico;
    
    


 

    protected $rules = [
        'tecnico' => 'required|string',
        
     
        
    ];


    public function mount(Solicitud $solicitud){
        $this->solicitud_id = $solicitud->id;
        $this->tecnico = $solicitud->tecnico;
        

    }

    public function asignarTecnico(){
        $datos = $this->validate();


        //Encontrar el tecnico a editar
        $solicitud = Solicitud::find($this->solicitud_id);
        //asignar valores
        $solicitud->tecnico = (Tecnico::all()->find($datos['tecnico']))->nombre;
        $solicitud->tecnico_id = $datos['tecnico'];

        //Cambiar estado a en proceso
        $solicitud->estado = 'en proceso';

        //Guardar tecnico
        $solicitud->save();
        //redireccionar
        session()->flash('mensaje','Se actualizó correctamente');
        return redirect()->route('solicitudes.lista');
    }
    public function render()
    {
        $tecnicos = Tecnico::all();
       
        return view('livewire.asignar-tecnico', [
            'tecnicos' => $tecnicos
        ]);
    }
}
