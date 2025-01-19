<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevideoRequest;
use App\Http\Requests\UpdatevideoRequest;
use App\Models\video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Video::latest();
//        $results = Video::latest()->filter(request(['tag', 'search']));
        
        return view('tutorials.videos', [
            'videos' => $results->orderBy('sessionDate', 'asc')->paginate(12)
        ]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevideoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevideoRequest $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
    }
}
