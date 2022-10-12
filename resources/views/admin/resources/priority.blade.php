<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Priorities') }}
        </h2>
    </x-slot>
    <div class="py-2">
        @livewire('tables.priorities-datatable')
    </div>
</x-admin-layout>
