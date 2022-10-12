<div>
    <form wire:submit.prevent="save">
        <x-forms.filepond
            wire:model="images"
            :label="$label"
            multiple
        />
        @error('images.*')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </form>
</div>

