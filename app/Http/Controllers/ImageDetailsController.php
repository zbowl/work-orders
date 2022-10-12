<?php

namespace App\Http\Controllers;

use App\Models\ImageDetails;
use App\Http\Requests\StoreImageDetailsRequest;
use App\Http\Requests\UpdateImageDetailsRequest;

class ImageDetailsController extends Controller
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
     * @param  \App\Http\Requests\StoreImageDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageDetails  $imageDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ImageDetails $imageDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageDetails  $imageDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageDetails $imageDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageDetailsRequest  $request
     * @param  \App\Models\ImageDetails  $imageDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageDetailsRequest $request, ImageDetails $imageDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageDetails  $imageDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageDetails $imageDetails)
    {
        //
    }
}
