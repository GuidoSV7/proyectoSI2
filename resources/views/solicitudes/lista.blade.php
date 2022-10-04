<x-app-layout>
    <x-slot name="header">

    </x-slot>

    @if (session()->has('mensaje'))
        <div class="uppercase border border-green bg-green-100 text-green-600
        font-bold p-2 my-3">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="">
        <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
            
            <livewire:mostrar-solicitudes>      
        </div>
    </div>
</x-app-layout>
