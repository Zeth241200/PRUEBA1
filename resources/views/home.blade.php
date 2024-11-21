<x-app-layout>
    <div class= "max-w-4xl mx-auto px4">
        {{--<h1>Bienvenido a la pagina principal</h1> --}}
        <x-alert type="success" class="mb-4">
            <x-slot name="title">
            Titulo de la Alerta
            </x-slot>
            Contenido de la Alerta
        </x-alert>
        <p>Hola mundo</p>
    </div>
</x-app-layout>