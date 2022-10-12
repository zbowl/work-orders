<div
    x-data="{
        statuses: @entangle('statuses'),
        priorities: @entangle('priorities'),
        categories: @entangle('categories'),
        subCategories: @entangle('subCategories')
    }">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">

        <div class="grid bg-white rounded-lg shadow-xl">
            <form id="workorders_update" class="" wire:submit.prevent="save">
                <div class="flex justify-center py-4">
                    <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Create Work Order Form</h1>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
                    <textarea
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text"></textarea>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Scheduled Datetime</label>
                    <x-date-picker
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        wire:model="scheduledDate"
                        id="scheduledDate"/>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Scheduled Date</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Input 2"/>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Scheduled Time</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Input 3"/>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 md:gap-5 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Priority</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            wire:model="priorityId">

                            <option disabled>Select a Priority</option>
                            @foreach($priorities as $key => $value)
                                <option wire:key="{{ $loop->index }}" value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Status</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            wire:model="statusId">
                            <option disabled>Select a Status</option>
                            @foreach($statuses as $key => $value)
                                <option wire:key="{{ $loop->index }}" value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 md:gap-5 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Category</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            wire:model="categoryId">
                            <option disabled>Select a Category</option>
                            @foreach($categories as $key => $value)
                                <option wire:key="{{ $loop->index }}" value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Sub
                            Category</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            wire:model="subCategoryId">
                            <option disabled>Select a SubCategory</option>
                            @isset($subCategories)
                                @foreach($subCategories as $key => $value)
                                    <option wire:key="{{ $loop->index }}" value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Another
                        Input</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="Another Input"/>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <x-forms.filepond
                        wire:model="images"
                        :label="$label"
                        multiple
                        allowImagePreview
                        imagePreviewMaxHeight="200"
                        allowFileTypeValidation
                        acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                        allowFileSizeValidation
                        maxFileSize="4mb"
                    />
                    @error('images.*')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
                    <button
                        class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">
                        Cancel
                    </button>
                    <button
                        class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">
                        Create
                    </button>
                </div>
            </form>


            <div class="grid grid-cols-1 mt-5 mx-7">
                @livewire('forms.work-order-file-upload')
            </div>

        </div>

        {{--}}
        <div class="grid bg-white rounded-lg shadow-xl">
            <div class="flex justify-center py-4">
                <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Tailwind Form</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Input 1</label>
                <input
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="Input 1"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Input 2</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="Input 2"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Input 3</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="Input 3"/>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Selection</label>
                <select
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Another Input</label>
                <input
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="Another Input"/>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                    Photo</label>
                <div class="flex items-center justify-center w-full">
                    <label
                        class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider">
                                Select a
                                photo</p>
                        </div>
                        <input type="file" class="hidden"/>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
                <button
                    class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">
                    Cancel
                </button>
                <button
                    class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">
                    Create
                </button>
            </div>

        </div>
        <div class="grid bg-white rounded-lg shadow-xl">
            <div class="flex justify-center py-4">
                <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Tailwind Form</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Input 1</label>
                <input
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="Input 1"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Input 2</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="Input 2"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Input 3</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" placeholder="Input 3"/>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Selection</label>
                <select
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Another Input</label>
                <input
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="Another Input"/>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                    Photo</label>
                <div class="flex items-center justify-center w-full">
                    <label
                        class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider">
                                Select a
                                photo</p>
                        </div>
                        <input type="file" class="hidden"/>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
                <button
                    class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">
                    Cancel
                </button>
                <button
                    class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">
                    Create
                </button>
            </div>

        </div>
        {{--}}
    </div>
</div>
