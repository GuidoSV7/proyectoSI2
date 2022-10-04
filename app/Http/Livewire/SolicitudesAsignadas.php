<?php

namespace App\Http\Livewire;
use App\Policies\SolicitudPolicy;


use Illuminate\Support\Facades\Auth;
use App\Models\Solicitud;
use App\Models\User;
use Livewire\Component;

class SolicitudesAsignadas extends Component
{
    protected $listeners = ['eliminarSolicitud'];

    public function eliminarSolicitud(Solicitud $solicitud){       
        
        $solicitud->delete();
        
    }

    public function render()
    {
        
        
        
        


        $solicitudes = Solicitud::paginate(5);
       
        return view('livewire.solicitudes-asignadas',[
            'solicitudes'=> $solicitudes,
            
        ]);
    }
}
