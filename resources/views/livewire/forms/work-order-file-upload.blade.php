<div>
    <form wire:submit.prevent="updateFile">
        <x-forms.filepond
            wire:model="files"
            :label="$label"
            multiple
        />
    </form>
</div>

