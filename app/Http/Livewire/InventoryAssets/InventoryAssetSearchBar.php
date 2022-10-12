<?php

namespace App\Http\Livewire\InventoryAssets;

use App\Models\InventoryAsset;
use Livewire\Component;

class InventoryAssetSearchBar extends Component
{
    public string $query = '';
    public array $inventoryAssets = [];
    public int $highlightIndex = 0;
    public string $selectedInventoryAsset = '';

    public function mount()
    {
        $this->reset('highlightIndex','inventoryAssets','query','selectedInventoryAsset');
    }
    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->inventoryAssets) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->inventoryAssets) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectInventoryAsset()
    {
        $this->selectedInventoryAsset = $this->inventoryAsset[$this->highlightIndex] ?? null;

    }

    public function updatedQuery()
    {
        $this->inventoryAssets = InventoryAsset::where('item_number', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.inventory-assets.inventory-asset-search-bar');
    }
}
