<div class="flex flex-auto gap-2 text-black">
    <div x-data>
        Open Orders: <span x-text="$wire.numberOfOpenOrders"></span>
    </div>
    <div x-data>
        Orders With Materials: <span x-text="$wire.numberOfOrdersWithMaterials"></span>
    </div>
    <div x-data>
        <template x-for="type in $wire.numberOfOrdersByType">
            <li>
                <span x-text="type.name + ': '"></span>
                <span x-text="type.work_orders_count"></span>
            </li>
        </template>
    </div>
    <div x-data>
        <template x-for="category in $wire.numberOfOrdersByCategory">
            <li>
                <span x-text="category.name + ': '"></span>
                <span x-text="category.work_orders_count"></span>
            </li>
        </template>
    </div>
    <div x-data>
        <template x-for="status in $wire.numberOfOrdersByStatus">
            <li>
                <span x-text="status.name + ': '"></span>
                <span x-text="status.work_orders_count"></span>
            </li>
        </template>
    </div>
</div>
