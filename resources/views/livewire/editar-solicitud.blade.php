<form class="md:-1/2 space-y-5" wire:submit.prevent='editarSolicitud'>
    <div>
        <x-label for="titulo" :value="__('Titulo')" />

        <x-input id="titulo" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="titulo" 
        :value="old('titulo')" 
         />

         @error('titulo')
             {{$message}}
         @enderror

    </div>

    <div>
        <x-label for="descripcion" :value="__('Descripcion')" />

        <x-input id="descripcion" 
        class="block mt-1 w-full" 
        type="text"
        wire:model="descripcion" 
        :value="old('descripcion')" 
         />

         @error('descripcion')
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