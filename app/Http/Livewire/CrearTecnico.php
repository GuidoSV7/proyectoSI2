<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Tecnico;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearTecnico extends Component
{
    public $nombre;
    public $domicilio;
    public $imagen;
    public $user_id;
    
    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'domicilio' => 'required|string',
        'imagen' => 'required|image|max:1024',
        
        
    ];


    public function crearTecnico(){
        $datos = $this->validate();

        //Almacenar imagen
        $imagen = $this->imagen->store('public/tecnicos');
        $datos['imagen'] = str_replace('public/tecnicos/' , '', $imagen);



        //Guarda info en la tabla Usuario
        User::create([
            'name' =>$datos['nombre'],
            'email' =>$datos['nombre'].'@gmail.com',
            'password' =>'$2y$10$OGQJXotRJOPr1mjmMzTr3.2TobzU0yoljfH4feBoWZ/otY96Oye/a',
            
        ])->assignRole('tecnico');

        //Crear al Tecnico
        Tecnico::create([
            'nombre' => $datos['nombre'],
            'domicilio' => $datos['domicilio'],
            'imagen' => $datos['imagen'] ,
            'user_id' => User::latest('id')->first()->id
            
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'Se publicó correctamente');
        
        //Redireccuonar el usuario
        return redirect()->route('dashboard');

    }

    public function render()
    {
        $usuarios = User::all();
        
        return view('livewire.crear-tecnico', [
            'usuarios' => $usuarios
        ]);
    }
}
