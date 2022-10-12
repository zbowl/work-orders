<div x-data="{ open: false }" class="min-h-screen bg-gray-50 py-6 flex flex-col items-center justify-center relative overflow-hidden sm:py-12">
    <div  @click="open = ! open" class="p-4 bg-blue-100 w-1/2 rounded flex justify-between items-center">
        <!-- Display -->
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
            </svg>
            <h4 class="font-medium text-sm text-blue-500"></h4>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </div>

    <!-- Content -->
    <div x-show="open" @click.outside="open = false"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-0"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-10"
         x-transition:leave-end="opacity-0 translate-y-0" class="w-1/2 bg-white p-4 ">
        <h4 class="text-sm text-slate-400"></h4>
        <button class="bg-blue-500 p-2 text-sm text-white font-bold rounded mt-4"></button>
    </div>
</div>
