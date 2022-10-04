<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">

                    <h1 class="text-2xl font-bold text-center mb-10">
                        Editar Técnico: {{$tecnico -> nombre}}

                    </h1>
                    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
                        @livewire('editar-tecnico', ['tecnico' => $tecnico])
                       {{-- <livewire:editar-tecnico :tecnico = "$tecnico"/>  --}}
                    </div>                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
