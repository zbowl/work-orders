    <div class="flex justify-start w-1/2 p-2">
        <input
            type="text"
            class="form-input"
            placeholder="Search Item Number..."
            value="@if(!empty($selectedInventoryAsset)){{ $selectedInventoryAsset }}@else''@endif"
            wire:model="query"
            wire:keydown.escape="resetInventoryAssetSearchBar"
            wire:keydown.tab="resetInventoryAssetSearchBar"
            wire:keydown.arrow-up="decrementHighlight"
            wire:keydown.arrow-down="incrementHighlight"
            wire:keydown.enter="selectInventoryAsset"
        />

        <div wire:loading class="absolute z-10 w-full bg-white text-black rounded-t-none shadow-lg list-group">
            <div class="list-item">Searching...</div>
        </div>

        @if(!empty($query))
            <div class="fixed top-0 -bottom-10 left-0 right-0"></div>

            <div class="absolute z-10 w-full bg-gray-100 text-black rounded-t-none shadow-lg list-group">
                @if(!empty($inventoryAssets))
                    @foreach($inventoryAssets as $i => $inventoryAsset)
                        <div class="list-item">
                            {{ $inventoryAsset['item_number'] }}
                        </div>
                    @endforeach
                @else
                    <div class="list-item">No results!</div>
                @endif
            </div>
        @endif
    </div>


