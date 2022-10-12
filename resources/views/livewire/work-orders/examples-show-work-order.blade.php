<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $workOrder->work_order_number }}
    </h2>
</x-slot>

<div>
<div class="grid grid-cols-4 grid-flow-col gap-3 py-3">
    <div class="col-span-1 bg-blue-100 rounded-lg">
        {{ $workOrder->work_order_number }}
    </div>
    <div class="bg-blue-100 rounded-lg">
        {{ $workOrder->assigned_by }}
    </div>
    <div class="bg-blue-100 rounded-md">
        {{ $workOrder->workOrderType->name }}
    </div>
    <div class="bg-blue-100 rounded-sm">
        {{ $workOrder->category->name }}
    </div>
</div>


<div class="grid grid-cols-12 gap-1 p-2">
    <x-work-order.card>
        <x-slot name="header">{{ __('Order Information') }}</x-slot>
        <x-slot name="content">
            <div class="table w-full bg-cyan-300 rounded-b-md pt-1">
                <div class="table-row-group">
                    <div class="table-row">
                        <div class="table-cell pl-1 text-left">Number:</div>
                        <div class="table-cell text-left">{{ $workOrder->work_order_number }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell pl-1 text-left">Type:</div>
                        <div class="table-cell text-left">{{ $workOrder->workOrderType->name }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell pl-1 text-left">Category:</div>
                        <div class="table-cell text-left">{{ $workOrder->category->name }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell pl-1 text-left">Sub Category:</div>
                        <div class="table-cell text-left">{{ $workOrder->subCategory->name }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell pl-1 text-left">Priority:</div>
                        <div class="table-cell text-left">{{ $workOrder->priority->name }}</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell pl-1 text-left">Status:</div>
                        <div class="table-cell text-left">{{ $workOrder->status->name }}</div>
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
    <x-work-order-accordian>
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
    </x-work-order-accordian>

    <div class="grid col-span-1 grid-flow-row auto-rows-max gap-2">
        <div class="bg-purple-100 rounded-md">
            Number:
        </div>
        <div class="bg-purple-100 rounded-md">
            Type:
        </div>
        <div class="bg-purple-100 rounded-md">
            Category:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Sub Category:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Priority:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Status:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Assigned By:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Assigned At:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Scheduled At:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Completed By:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Completed At:
        </div>
        <div class="bg-purple-100 rounded-lg">
            Created At:
        </div>
    </div>
    <div class="grid col-span-2 grid-flow-row auto-rows-max gap-2">
        <div class="bg-purple-100 rounded-md">
            {{ $workOrder->work_order_number }}
        </div>
        <div class="bg-purple-100 rounded-md">
            {{ $workOrder->workOrderType->name }}
        </div>
        <div class="bg-purple-100 rounded-md">
            {{ $workOrder->category->name }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->subCategory->name }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->priority->name }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->status->name }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->assigned_by }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->assigned_at }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->scheduled_at }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->completed_by }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->completed_at }}
        </div>
        <div class="bg-purple-100 rounded-lg">
            {{ $workOrder->created_at }}
        </div>
    </div>
    <div class="grid col-span-3 grid-flow-row auto-rows-max gap-2">
        <div x-data="{ open: false }" class="row-span-2 bg-cyan-100 rounded-t-md">

                <div @click="open = ! open" class="">
                    <!-- Display -->
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                        <h4 class="font-medium text-sm text-blue-500">Add bitcoin to your wallet</h4>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <!-- Content -->
                <div x-show="open" @click.outside="open = false"
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-y-0"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-700"
                     x-transition:leave-start="opacity-100 translate-y-10"
                     x-transition:leave-end="opacity-0 translate-y-0" class="p-4 clear-both">
                    <div class="bg-purple-100 rounded-md">
                        Number: {{ $workOrder->work_order_number }}
                    </div>
                    <div class="bg-purple-100 rounded-md">
                        Type: {{ $workOrder->workOrderType->name }}
                    </div>
                    <div class="bg-purple-100 rounded-md">
                        Category: {{ $workOrder->category->name }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Sub Category: {{ $workOrder->subCategory->name }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Priority: {{ $workOrder->priority->name }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Status: {{ $workOrder->status->name }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Assigned By:{{ $workOrder->assigned_by }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Assigned At: {{ $workOrder->assigned_at }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Scheduled At: {{ $workOrder->scheduled_at }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Completed By: {{ $workOrder->completed_by }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Completed At: {{ $workOrder->completed_at }}
                    </div>
                    <div class="bg-purple-100 rounded-lg">
                        Created At: {{ $workOrder->created_at }}
                    </div>
                </div>


        </div>



    </div>
    <div class="grid col-span-1 grid-flow-row auto-rows-max gap-2 bg-purple-100">
        <div class="col-span-1">
            Number:
        </div>
        <div class="col-span-1">
            Type:
        </div>
        <div class="col-span-1">
            Category:
        </div>
        <div class="col-span-1">
            Sub Category:
        </div>
        <div class="col-span-1">
            Priority:
        </div>
        <div class="col-span-1">
            Status:
        </div>
        <div class="col-span-1">
            Assigned By:
        </div>
        <div class="col-span-1">
            Assigned At:
        </div>
        <div class="col-span-1">
            Scheduled At:
        </div>
        <div class="col-span-1">
            Completed By:
        </div>
        <div class="col-span-1">
            Completed At:
        </div>
        <div class="col-span-1">
            Created At:
        </div>
    </div>
    <div class="grid col-span-2 grid-flow-row auto-rows-max gap-2 bg-purple-100">
        <div class="col-span-2">
            {{ $workOrder->work_order_number }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->workOrderType->name }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->category->name }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->subCategory->name }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->priority->name }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->status->name }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->assigned_by }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->assigned_at }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->scheduled_at }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->completed_by }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->completed_at }}
        </div>
        <div class="col-span-2">
            {{ $workOrder->created_at }}
        </div>
    </div>

    <div class="grid col-span-3">
        <table>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

</div>
