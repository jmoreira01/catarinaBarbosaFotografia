<?php

namespace App\Http\Controllers;

use App\Service;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('dashboard.pages.videos.indexvideos', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videos = Video::with(['service']);
        $services = Service::all();
        return view('dashboard.pages.videos.createvideos', ['videos' => $videos, 'services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'url'                => 'required',
            'service_id'         => 'required',

        ]);

        $video = new Video();
        $video->url              = $request->url  ;
        $video->service_id        = $request->service_id;

        $video->save();

        return redirect('videos')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //return view('dashboard.pages.videos.showvideos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $videos = Video::with(['service']);
        $services = Service::all();
        return view('dashboard.pages.videos.editvideos', ['video' => $video, 'services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return redirect('videos')->with('status','Item edited successfully!');

        $video = Video::find($video->id);
        $video->url              = $request->url;
        $video->service_id        = $request->service_id;
        $video->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video = Video::find($video->id);
        $video->delete();
        return redirect('videos')->with('status','Item deleted successfully!');
    }
}
