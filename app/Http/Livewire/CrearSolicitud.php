<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Tecnico;
use Livewire\Component;
use App\Models\Solicitud;
use Livewire\WithFileUploads;


class CrearSolicitud extends Component
{
    public $titulo;
    public $descripcion;
  
    
    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'descripcion' => 'required|string',
        
        
    ];


    public function crearSolicitud(){
        $datos = $this->validate();

        // //Almacenar imagen
        // $imagen = $this->imagen->store('public/tecnicos');
        // $datos['imagen'] = str_replace('public/tecnicos/' , '', $imagen);

        // // //Crear Solicitud
             Solicitud::create([
             'titulo' => $datos['titulo'],
             'descripcion' => $datos['descripcion'],
             'estado' => 'disponible',
             'tecnico'=> null,
             'tecnico_id'=> null,
             'user_id' => auth()->user()->id

         ]);

        //Crear un mensaje
        session()->flash('mensaje', 'Se publicó correctamente');
        
        //Redireccuonar el usuario
        return redirect()->route('dashboard');

    }

    public function render()
    {
        $solicitudes = User::all();
        
        return view('livewire.crear-solicitud', [
            'solicitudes' => $solicitudes
        ]);
    }
}
