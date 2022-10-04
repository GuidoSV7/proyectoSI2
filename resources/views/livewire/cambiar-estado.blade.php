<form class="md:-1/2 space-y-5" wire:submit.prevent='cambiarEstado'>
    <div>
        <x-label for="estado" :value="__('Estado')" />

        <x-input id="estado" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="estado" 
        :value="old('estado')" 
         />
         {{-- <select wire:model="estado"">
            <option value="finalizado">Finalizado</option>
          </select> --}}
          
         @error('estado')
             {{$message}}
         @enderror

    </div>

    

    <x-button>
        Guardar Cambios
    </x-button>



</form>