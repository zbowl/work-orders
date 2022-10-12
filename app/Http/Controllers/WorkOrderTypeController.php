<?php

namespace App\Http\Controllers;

use App\Models\WorkOrderType;
use App\Http\Requests\StoreWorkOrderTypeRequest;
use App\Http\Requests\UpdateWorkOrderTypeRequest;

class WorkOrderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorkOrderTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkOrderTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkOrderType  $workOrderType
     * @return \Illuminate\Http\Response
     */
    public function show(WorkOrderType $workOrderType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkOrderType  $workOrderType
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkOrderType $workOrderType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkOrderTypeRequest  $request
     * @param  \App\Models\WorkOrderType  $workOrderType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkOrderTypeRequest $request, WorkOrderType $workOrderType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkOrderType  $workOrderType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkOrderType $workOrderType)
    {
        //
    }
}
