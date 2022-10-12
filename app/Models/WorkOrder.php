<?php

namespace App\Models;

use App\Models\Pivots\Comment;
use App\Models\Pivots\WorkOrderMaterial;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WorkOrder extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    use HasFactory;


    public function tasks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkOrderTask::class);
    }

    public function materials(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Material::class);
    }

    public function workOrderType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(WorkOrderType::class);
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function priority(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Priority::class);
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('work-order-images')
            ->acceptsMimeTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/gif']);
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Comment::class,'commentable');
    }

    protected function scopeGroupMaterialNamesAndCount($query)
    {
        return $query->selectRaw('COUNT(materials.inventory_asset_id) as assets_count')
            ->selectRaw('STRING_AGG(inventory_assets.item_number, \', \') as grouped_asset_names')
            ->leftJoin('material_work_order', 'work_orders.id','material_work_order.work_order_id')
            ->leftJoin('materials', 'materials.id','material_work_order.material_id')
            ->leftJoin('inventory_assets','inventory_assets.id','materials.inventory_asset_id')
            ->groupBy('work_orders.id');
    }

    protected function scopeTaskCount($query)
    {
        return $query->selectRaw('COUNT(tasks.id) as tasks_count')
            ->selectRaw('STRING_AGG(tasks.name, \', \') as grouped_task_names')
            ->leftJoin('work_order_tasks', 'work_orders.id','work_order_tasks.work_order_id')
            ->leftJoin('tasks','tasks.id','work_order_tasks.task_id')
            ->groupBy('work_orders.id');
    }

    public function scopeSelectGroupedTaskNames($query, $alias)
    {
        return $query->addSelect([
                $alias => WorkOrderTask::selectRaw('STRING_AGG(tasks.name, \', \')')
                    ->leftJoin('work_orders', 'work_orders.id','work_order_tasks.work_order_id')
                    ->leftJoin('tasks','tasks.id','work_order_tasks.task_id')
                    //->whereColumn('work_order_tasks.work_order_id', 'work_orders.id')
            ]);
    }

    public function scopeGroupedTaskNames($query)
    {
        return $query->addSelect([
            'grouped_task_names' => WorkOrderTask::selectRaw('STRING_AGG(tasks.name, \', \')')
                ->leftJoin('work_orders', 'work_orders.id','work_order_tasks.work_order_id')
                ->leftJoin('tasks','tasks.id','work_order_tasks.task_id')
                ->groupBy('work_orders.id')
            //->whereColumn('work_order_tasks.work_order_id', 'work_orders.id')
        ]);
    }

}
