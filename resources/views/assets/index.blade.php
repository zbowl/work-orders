<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assets') }}
        </h2>
    </x-slot>
    <div class="py-2">
        @livewire('tables.inventory-asset-datatable')
    </div>
</x-app-layout>
