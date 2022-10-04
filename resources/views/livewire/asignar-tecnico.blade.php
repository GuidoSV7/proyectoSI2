<form class="md:-1/2 space-y-5" wire:submit.prevent='asignarTecnico'>
    <div>
        <x-label for="tecnico" :value="__('Tecnico')" />

        {{-- <x-input id="tecnico" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="tecnico" 
        :value="old('tecnico')" 
         /> --}}
         <select 
            class="block mt-1 w-full overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 "
            id="tecnico"
            wire:model="tecnico"
            class = "" 
            :value="old('tecnico')" 
        >
            
            <option>--Seleccione</option>
            @foreach ( $tecnicos as $tecnico )

                {{-- <option  value="{{$tecnico->id}}">{{ $tecnico->nombre}}</option> --}}
                <option  value="{{$tecnico->id}}">{{ $tecnico->nombre}}</option>
                
            @endforeach

        </select>

         @error('titulo')
             {{$message}}
         @enderror

    </div>


    


 
    {{--Prueba para mostrar CLientes-- FUNCIONA}}
    {{-- <div class="mt-4">
        <x-input-label for="cliente" :value="__('Cliente')" />
        <select 
            id="cliente"
            name="cliente"
            class = "rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
            focus:ring-indigo-200 focus:ring-opacity-50"
        >
            
            <option>--Seleccione</option>
            @foreach ( $clientes as $cliente )
               
                <option  value="{{$cliente->id}}">{{ $cliente->nombre}}</option>
                
            @endforeach

        </select>

    </div> --}}

    <x-button>
        Guardar Cambios
    </x-button>



</form>