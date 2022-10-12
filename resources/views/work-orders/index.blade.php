<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 place-content-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Work Orders') }}
                </h2>
            </div>
            <div></div>
            <div>
                <a href="{{ route('work-orders.create') }}"
                   class="border-2 border-transparent hover:border-red-500 hover:bg-red-200 bg-red-300 hover:shadow-lg text-black px-3 py-1">Create
                    Work-Order</a>
            </div>
        </div>
    </x-slot>
    <div class="py-2">
        @livewire('tables.work-orders-datatable')
    </div>
</x-app-layout>
