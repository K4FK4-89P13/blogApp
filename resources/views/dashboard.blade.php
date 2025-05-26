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
            <x-alert id="alerta" class="mb-4" type="info">
                <x-slot name="title">
                    Titulo
                </x-slot>
                
                <p>Alerta de tipo Danger</p>
            </x-alert>
            {{-- <div class="bg-red-100 border-red-500 text-red-700 danger border-l-4 p-4" role="alert">
                <p class="font-bold">Be Warned</p>
                <p>Something not ideal might be happening.</p>
            </div> --}}
            <p>Hola Mundo</p>
        </div>
    </div>
</x-app-layout>
