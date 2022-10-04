<div class="bg-white overflow-hidden shadow-sm">

    @foreach ($tecnicos as $tecnico)
     <div class="p-6 overflow-hidden shadow-md dark:bg-dark-eval-1 md:flex md:justify-between md:items-center">
         
         <div class="leading-10">
             <a href="#" class="text-xl font-bold">
                 {{$tecnico->nombre}}
             </a>
         </div>
 
         <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
             <a
             href="#"
             class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
             >Detalles</a>
 
             
 
             <a
             href="{{route('tecnicos.edit', $tecnico->id)}}"
             class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center" 
             >Editar</a>
   
 
             <button 
                 wire:click="$emit('eliminarTecnico',{{$tecnico->id}})"
                 class="bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
             >Eliminar</button>
         </div>
 
     </div>
    @endforeach
    
 
 </div>
 
 <div class="flex justify-center mt-10">
     {{$tecnicos->links()}}
 </div>