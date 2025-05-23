<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}} 
            <x-alert id="alerta" class="mb-4" type="danger">
                <x-slot name="title">
                    Titulo
                </x-slot>
                
                <p>Alerta de tipo Danger</p>
            </x-alert>
            <p>Hola Mundo</p>
        </div>
    </div>
</x-app-layout>
