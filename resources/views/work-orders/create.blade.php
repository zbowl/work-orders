<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Work Order') }}
        </h2>
    </x-slot>
    <div class="py-2">
        {{--}}@livewire('forms.work-order-file-upload'){{--}}
        @livewire('forms.work-order-form')
    </div>
</x-app-layout>
