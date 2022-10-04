<div class="bg-white overflow-hidden shadow-sm">
    
    @foreach ($solicitudes as $solicitud)
     
     @if($solicitud->estado == 'en proceso' and $solicitud->id_tecnico = Auth::id())
     <div class="p-6 overflow-hidden shadow-md dark:bg-dark-eval-1 md:flex md:justify-between md:items-center">
         
        
         <div class="leading-10">
             <a href="#" class="text-xl font-bold">
                 {{$solicitud->titulo}} 
             </a>
             
         </div>
         
 
         <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
 
             
             <a
             href="{{route('solicitudes.edit', $solicitud->id)}}"
             class="bg-purple-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center" 
             >{{$solicitud->estado}}</a>


             <a
             href="{{route('solicitudes.cambiar-estado', $solicitud->id)}}"
             class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center" 
             >Cambiar Estado</a>
         </div>
         
 
     </div>
     <p class='px-6 dark:bg-dark-eval-1'> {{$solicitud->descripcion}}</p> 
     <p class='px-6 dark:bg-dark-eval-1'> Nombre del cliente: {{$solicitud->user->name}}</p> 
     @endif
    @endforeach
    
 
 </div>
 
 <div class="flex justify-center mt-10">
     {{$solicitudes->links()}}
 </div>