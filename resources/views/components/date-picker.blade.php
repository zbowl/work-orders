@props(['options' => "{enableTime: true, theme: 'dark', dateFormat:'Y-m-d H:i:S', altFormat:'F j, Y', altInput:true, }"])
<div wire:ignore>
    <input
        x-data
        x-ref="inputDatePicker"
        x-init="flatpickr($refs.inputDatePicker, {{ $options }});"
        type="text"
        data-input
        {{ $attributes }}
    >
</div>
