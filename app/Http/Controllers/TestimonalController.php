<?php

namespace App\Http\Controllers;

use App\Testimonal;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonals = Testimonal::all();
        return view('dashboard.pages.testemunhos.indextestemunho', ['testimonals' => $testimonals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.testemunhos.createtestemunho');
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
            'name'                => 'required',
            'comment'         => 'required',
            'visibility'         => 'required',
        ]);

        $testimonal = new Testimonal();
        $testimonal->name              = $request->name  ;
        $testimonal->comment       = $request->comment;
        $testimonal->visibility      = $request->visibility;
        $testimonal->save();

        return redirect('testimonals')->with('status','Item created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonal  $testimonal
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonal $testimonal)
    {
        return view('dashboard.pages.testemunhos.showtestemunho', ['testimonal' => $testimonal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonal  $testimonal
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonal $testimonal)
    {

        return view('dashboard.pages.testemunhos.edittestemunho', ['testimonal' => $testimonal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonal  $testimonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonal $testimonal)
    {
        $testimonal->update($request->all());
        return redirect('testimonals')->with('status','Item edited successfully!');

        $testimonal = Testimonal::find($testimonal->id);
        $testimonal->name              = $request->name  ;
        $testimonal->comment       = $request->comment;
        $testimonal->visibility      = $request->visibility;
        $testimonal->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonal  $testimonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonal $testimonal)
    {
        $testimonal = Testimonal::find($testimonal->id);
        $testimonal->delete();
        return redirect('testimonals')->with('status','Item deleted successfully!');
    }
}
