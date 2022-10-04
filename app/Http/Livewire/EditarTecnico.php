<?php

namespace App\Http\Livewire;

use App\Models\Tecnico;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarTecnico extends Component
{
    public $tecnico_id;
    public $nombre;
    public $domicilio;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;


    protected $rules = [
        'nombre' => 'required|string',
        'domicilio' => 'required|string',
        'imagen_nueva' => 'nullable|image|max:1024'
        
    ];


    public function mount(Tecnico $tecnico){
        $this->tecnico_id = $tecnico->id;
        $this->nombre = $tecnico->nombre;
        $this->domicilio = $tecnico->domicilio;
        $this->imagen = $tecnico->imagen;
    }

    public function editarTecnico(){
        $datos = $this->validate();

        //Si hay una nueva imagen
        if($this -> imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/tecnicos');
            $datos['imagen'] = str_replace('public/tecnicos/', '', $imagen);
        }

        //Encontrar el tecnico a editar
        $tecnico = Tecnico::find($this->tecnico_id);
        //asignar valores
        $tecnico->nombre = $datos['nombre'];
        $tecnico->domicilio = $datos['domicilio'];
        $tecnico->imagen = $datos['imagen'] ?? $tecnico->imagen;
        //Guardar tecnico
        $tecnico->save();
        //redireccionar
        session()->flash('mensaje','Se actualizó correctamente');
        return redirect()->route('tecnicos.lista');
    }

    public function render()
    {
        return view('livewire.editar-tecnico');
    }
}
