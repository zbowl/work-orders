@props(['modelId','command','name','options'])

<div x-data="{
    edit: false,
    edited: false,
    init() {
        window.livewire.on('fieldEdited', (id) => {
            if (id === '{{ $modelId }}') {
                this.edited = true
                setTimeout(() => {
                    this.edited = false
                }, 5000)
            }
        })
    }
}" x-init="init()" :key="{{ $modelId }}">
    <button
        class="min-h-[28px] w-full text-left hover:bg-blue-100 px-2 py-1 -mx-2 -my-1 rounded focus:outline-none"
        x-bind:class="{ 'text-green-600': edited }" x-show="!edit"
        x-on:click="edit = true; $nextTick(() => { $refs.editableSelect.focus() })">{!! htmlspecialchars($name) !!}</button>
    <span x-cloak x-show="edit">
        <select class="form-select form-select-sm appearance-none block px-2 py-1 -mx-4 text-sm font-normal
                                  bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
                                  focus:border-blue-600 border-blue-400 focus:outline-none focus:border dark:text-black"
                x-ref="editableSelect"
                wire:change="{{$command}}($event.target.value, '{{ $modelId }}')"
                x-on:blur="edit = false"
                x-on:keydown.enter="edit = false">

            @foreach($options as $id => $name)
                <option value="{{ $id }}" @if($modelId == $id) selected @endif>{{ $name }}</option>
            @endforeach
        </select>
    </span>
</div>

