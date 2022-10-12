<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="py-2">
        @livewire('tables.categories-datatable')
    </div>
    <div class="py-2">
        @livewire('tables.sub-categories-datatable')
    </div>
</x-admin-layout>
