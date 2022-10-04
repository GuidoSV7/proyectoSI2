<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown>  --}}

    
    @php
        $links = array_fill(0, 5, '');
    @endphp
{{-- 
     @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach  --}}

   @can('tecnicos.create')
    <x-sidebar.link title="Crear Técnico" href="{{ route('tecnicos.create') }}" :isActive="request()->routeIs('tecnicos.create')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
   @endcan

   @can('solicitudes.create')
    <x-sidebar.link title="Crear Solicitud" href="{{ route('solicitudes.create') }}" :isActive="request()->routeIs('solicitudes.create')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan

    @can('tecnicos.lista')
    <x-sidebar.link title="Lista Tecnicos" href="{{ route('tecnicos.lista') }}" :isActive="request()->routeIs('tecnicos.lista')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan
    

    @can('solicitudes.lista')
    <x-sidebar.link title="Mis Solicitudes" href="{{ route('solicitudes.lista') }}" :isActive="request()->routeIs('solicitudes.lista')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan

    
    @can('tecnicos.create')
    <x-sidebar.link title="Solicitudes Disponibles" href="{{ route('solicitudes.disponibles') }}" :isActive="request()->routeIs('solicitudes.disponibles')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan
    
    @can('tecnicos.create')
    <x-sidebar.link title="Solicitudes en Proceso" href="{{ route('solicitudes.en-proceso') }}" :isActive="request()->routeIs('solicitudes.en-proceso')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan
    
    @can('tecnicos.create')
    <x-sidebar.link title="Solicitudes Finalizadas" href="{{ route('solicitudes.finalizados') }}" :isActive="request()->routeIs('solicitudes.finalizados')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan
    
    @can('solicitudes.solicitudes-asignadas')
    <x-sidebar.link title="Solicitudes Asignadas" href="{{ route('solicitudes.solicitudes-asignadas') }}" :isActive="request()->routeIs('solicitudes.solicitudes-asignadas')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endcan
       
</x-perfect-scrollbar>