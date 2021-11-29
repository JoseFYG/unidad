<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-5 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="max-width: 40%; height: auto;">
                <img src="{{ asset('/images/cartel.jpg')}}" alt="" class="mt-3 mb-3">
            </div>
        </div>
    </div>
</x-app-layout>
