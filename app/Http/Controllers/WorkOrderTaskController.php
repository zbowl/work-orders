<?php

namespace App\Http\Controllers;

use App\Models\WorkOrderTask;
use App\Http\Requests\StoreWorkOrderTaskRequest;
use App\Http\Requests\UpdateWorkOrderTaskRequest;

class WorkOrderTaskController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkOrderTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkOrderTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Http\Response
     */
    public function show(WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkOrderTaskRequest  $request
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkOrderTaskRequest $request, WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkOrderTask $workOrderTask)
    {
        //
    }
}
