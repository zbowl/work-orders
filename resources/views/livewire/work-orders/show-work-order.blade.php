<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $workOrder->work_order_number }}
    </h2>
</x-slot>

<div>
    <div class="grid grid-cols-12 gap-1 p-2">
        <x-work-order.card :column-span="3">
            <x-slot name="header">{{ __('Order Information') }}</x-slot>
            <x-slot name="content">
                <div class="table w-full rounded-b-md pt-1">
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Number:</div>
                            <div class="table-cell text-left">{{ $workOrder->work_order_number }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Type:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->work_order_type_id"
                                                              :command="'workOrderTypeEdited'"
                                                              :name="htmlspecialchars($workOrder->workOrderType->name)"
                                                              :options="$workOrderTypes"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Category:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->category_id"
                                                              :command="'categoryEdited'"
                                                              :name="htmlspecialchars($workOrder->category->name)"
                                                              :options="$categories"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Sub Category:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->sub_category_id"
                                                              :command="'subCategoryEdited'"
                                                              :name="htmlspecialchars($workOrder->subCategory->name)"
                                                              :options="$subCategories"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Priority:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->priority_id"
                                                              :command="'priorityEdited'"
                                                              :name="htmlspecialchars($workOrder->priority->name)"
                                                              :options="$priorities"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Status:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->status_id"
                                                              :command="'statusEdited'"
                                                              :name="htmlspecialchars($workOrder->status->name)"
                                                              :options="$statuses"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Assigned By:</div>
                            <div class="table-cell text-left">{{ $workOrder->assigned_by }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Assigned At:</div>
                            <div class="table-cell text-left">{{ $workOrder->assigned_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Scheduled At:</div>
                            <div class="table-cell text-left">{{ $workOrder->scheduled_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Completed By:</div>
                            <div class="table-cell text-left">{{ $workOrder->completed_by }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Completed At:</div>
                            <div class="table-cell text-left">{{ $workOrder->completed_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Created At:</div>
                            <div class="table-cell text-left">{{ $workOrder->created_at }}</div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-work-order.card>
        <x-work-order.card :column-span="3">
            <x-slot name="header">{{ __('Asset Information') }}</x-slot>
            <x-slot name="content">
                <div class="table w-full rounded-b-md pt-1">
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Number:</div>
                            <div class="table-cell text-left">{{ $workOrder->work_order_number }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Type:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->work_order_type_id"
                                                              :command="'workOrderTypeEdited'"
                                                              :name="htmlspecialchars($workOrder->workOrderType->name)"
                                                              :options="$workOrderTypes"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Category:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->category_id"
                                                              :command="'categoryEdited'"
                                                              :name="htmlspecialchars($workOrder->category->name)"
                                                              :options="$categories"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Sub Category:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->sub_category_id"
                                                              :command="'subCategoryEdited'"
                                                              :name="htmlspecialchars($workOrder->subCategory->name)"
                                                              :options="$subCategories"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Priority:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->priority_id"
                                                              :command="'priorityEdited'"
                                                              :name="htmlspecialchars($workOrder->priority->name)"
                                                              :options="$priorities"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Status:</div>
                            <div class="table-cell text-left">
                                <x-work-order.editable-select :model-id="$workOrder->status_id"
                                                              :command="'statusEdited'"
                                                              :name="htmlspecialchars($workOrder->status->name)"
                                                              :options="$statuses"/>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Assigned By:</div>
                            <div class="table-cell text-left">{{ $workOrder->assigned_by }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Assigned At:</div>
                            <div class="table-cell text-left">{{ $workOrder->assigned_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Scheduled At:</div>
                            <div class="table-cell text-left">{{ $workOrder->scheduled_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Completed By:</div>
                            <div class="table-cell text-left">{{ $workOrder->completed_by }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Completed At:</div>
                            <div class="table-cell text-left">{{ $workOrder->completed_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 text-left">Created At:</div>
                            <div class="table-cell text-left">{{ $workOrder->created_at }}</div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-work-order.card>
        <x-work-order.accordian :column-span="3">
            <x-slot name="header">{{ __('Order Information') }}</x-slot>
            <x-slot name="content">
                <div class="table w-full">
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell pl-1 pt-1 bg-emerald-100 text-left">Number:</div>
                            <div class="table-cell bg-emerald-100 text-left">{{ $workOrder->work_order_number }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-300 text-left">Type:</div>
                            <div class="table-cell bg-emerald-300 text-left">{{ $workOrder->workOrderType->name }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-100 text-left">Category:</div>
                            <div class="table-cell bg-emerald-100 text-left">{{ $workOrder->category->name }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-300 text-left">Sub Category:</div>
                            <div class="table-cell bg-emerald-300 text-left">{{ $workOrder->subCategory->name }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-100 text-left">Priority:</div>
                            <div class="table-cell bg-emerald-100 text-left">{{ $workOrder->priority->name }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-300 text-left">Status:</div>
                            <div class="table-cell bg-emerald-300 text-left">{{ $workOrder->status->name }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-100 text-left">Assigned By:</div>
                            <div class="table-cell bg-emerald-100 text-left">{{ $workOrder->assigned_by }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-300 text-left">Assigned At:</div>
                            <div class="table-cell bg-emerald-300 text-left">{{ $workOrder->assigned_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-100 text-left">Scheduled At:</div>
                            <div class="table-cell bg-emerald-100 text-left">{{ $workOrder->scheduled_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-300 text-left">Completed By:</div>
                            <div class="table-cell bg-emerald-300 text-left">{{ $workOrder->completed_by }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-100 text-left">Completed At:</div>
                            <div class="table-cell bg-emerald-100 text-left">{{ $workOrder->completed_at }}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell pl-1 bg-emerald-300 text-left">Created At:</div>
                            <div class="table-cell bg-emerald-300 text-left">{{ $workOrder->created_at }}</div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-work-order.accordian>
        <x-work-order.accordian :column-span="6">
            <x-slot name="header">{{ __('Materials') }}</x-slot>
            <x-slot name="content">
                <div x-data="materialList">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th></th>
                            <th class="p-1">
                                <div class="font-semibold text-left">Product Name</div>
                            </th>
                            <th class="p-1">
                                <div class="font-semibold text-left">Quantity</div>
                            </th>
                            <th class="p-1">
                                <div class="font-semibold text-left">Unit Price</div>
                            </th>
                            <th class="p-1">
                                <div class="font-semibold text-left">Total</div>
                            </th>
                            <th class="p-1">
                                <div class="font-semibold text-center">Action</div>
                            </th>
                        </tr>
                        </thead>

                        <tbody class="text-sm divide-y divide-gray-100">
                        @foreach($workOrder->materials as $material)
                            <tr>
                                <td class="p-1">
                                    <input type="checkbox" class="w-5 h-5"
                                           value="{{ $material->id }} - {{ $material->inventoryAsset->item_number }}"
                                           @click="toggleCheckbox($el, {{ $material->quantity_requested * $material->inventoryAsset->unit_price }})"/>
                                </td>
                                <td>
                                    <div class="font-medium text-gray-800">
                                        {{ $material->inventoryAsset->item_number }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-left font-medium text-gray-800">
                                        {{ $material->quantity_requested }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-left font-medium text-green-500">
                                        ${{ $material->inventoryAsset->unit_price }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-left font-medium text-green-500">
                                        ${{ $material->quantity_requested * $material->inventoryAsset->unit_price }}
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- total amount -->
                    <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4">
                        <div>Total</div>
                        <div class="text-blue-600">RM <span x-text="total.toFixed(2)"></span></div>
                    </div>

                    <div class="flex justify-end">
                        <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                        <input type="text" class="border border-black text-black bg-gray-100" x-model="selected"/>
                    </div>
                </div>

            </x-slot>
        </x-work-order.accordian>

    </div>
    <div class="grid grid-cols-12 gap-1 p-2">
        <x-work-order.card :column-span="6">
            <x-slot name="header">{{ __('Tasks') }}</x-slot>
            <x-slot name="content">
                <div x-data="{
                    init() {
                        $wire.emit('locateWorkOrderTasks','{{ $workOrder->id }}')
                    }
                }" x-init="init()">
                    @livewire('tables.work-order-tasks-datatable')
                </div>
            </x-slot>
        </x-work-order.card>
    </div>
    <div class="grid grid-cols-12 gap-1 p-2">
        <x-work-order.card :column-span="6">
            <x-slot name="header">{{ __('Materials') }}</x-slot>
            <x-slot name="content">
                <div x-data="{
                    init() {
                        $wire.emit('locateWorkOrderMaterials','{{ $workOrder->id }}')
                    }
                }" x-init="$nextTick(() => { init() })">
                    @livewire('tables.work-order-materials-datatable')
                </div>
            </x-slot>
        </x-work-order.card>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("materialList", () => ({
                total: 0,
                selected: [],

                toggleCheckbox(element, amount) {
                    if (element.checked) {
                        this.selected.push(element.value);
                        this.total += amount;
                    } else {
                        const index = this.selected.indexOf(element.value);

                        if (index > -1) this.selected.splice(index, 1);

                        this.total -= amount;
                    }
                },
            }));
        });
    </script>
@endpush
