<?php

namespace App\Http\Livewire;
use App\Policies\SolicitudPolicy;


use Illuminate\Support\Facades\Auth;
use App\Models\Solicitud;
use Livewire\Component;

class MostrarDisponibles extends Component
{
    protected $listeners = ['eliminarSolicitud'];

    public function eliminarSolicitud(Solicitud $solicitud){       
        
        $solicitud->delete();
        
    }

    public function render()
    {
        
        $solicitudes = Solicitud::where('estado', 'disponible')->paginate(5);
       
        return view('livewire.mostrar-disponibles',[
            'solicitudes'=> $solicitudes
        ]);
    }
}
