<?php

namespace App\Http\Controllers;

use App\Image;
use App\Service;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('dashboard.pages.imagens.indeximagens', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Image::with(['service']);
        $services = Service::all();
        return view('dashboard.pages.imagens.createimagens', ['images' => $images, 'services' => $services]);
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
            'image'                => 'required',
            'service_id'         => 'required',
        ]);

        $image = new Image();
        $image->image              = $request->image;
        $image->service_id        = $request->service_id;
        $image->save();

        //If we have an image file, we store it, and move it in the database
        if ($request->file('image')) {
            // Get Image File
            $imagePath = $request->file('image');
            // Define Image Name
            $imageName = $image->id . '_' . time() . '_' . $imagePath->getClientOriginalName();
            // Save Image on Storage
            $path = $request->file('image')->storeAs('images/images/' . $image->id, $imageName, 'public');
            //Save Image Path
            $image->image = $path;
        }
        $image->save();


        return redirect('images')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //return view('dashboard.pages.imagens.showimagens');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $images = Image::with(['service']);
        $services = Service::all();
        return view('dashboard.pages.imagens.editimagens', ['image' => $image, 'services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $image->update($request->all());
        return redirect('images')->with('status', 'Item edited successfully!');

        $image = Video::find($image->id);
        $image->image = $request->image;
        $image->service_id = $request->service_id;
        $image->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Storage::deleteDirectory('public/images/images/' . $image->id);

        $image = Image::find($image->id);
        $image->delete();
        return redirect('images')->with('status','Item deleted successfully!');
    }
}
