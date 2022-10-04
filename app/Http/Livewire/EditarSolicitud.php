<?php

namespace App\Http\Livewire;

use App\Models\Solicitud;
use Livewire\Component;

class EditarSolicitud extends Component
{
    public $solicitud_id;
    public $titulo;
    public $descripcion;


 

    protected $rules = [
        'titulo' => 'required|string',
        'descripcion' => 'required|string',
     
        
    ];


    public function mount(Solicitud $solicitud){
        $this->solicitud_id = $solicitud->id;
        $this->titulo = $solicitud->titulo;
        $this->descripcion = $solicitud->descripcion;

    }

    public function editarSolicitud(){
        $datos = $this->validate();


        //Encontrar el tecnico a editar
        $solicitud = Solicitud::find($this->solicitud_id);
        //asignar valores
        $solicitud->titulo = $datos['titulo'];
        $solicitud->descripcion = $datos['descripcion'];

        //Guardar tecnico
        $solicitud->save();
        //redireccionar
        session()->flash('mensaje','Se actualizó correctamente');
        return redirect()->route('solicitudes.lista');
    }
    public function render()
    {
        return view('livewire.editar-solicitud');
    }
}
