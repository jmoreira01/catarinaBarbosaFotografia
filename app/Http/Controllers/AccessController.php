<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$accesses = Access::all();
        return view('dashboard.pages.acessos.indexacessos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.acessos.createacessos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Falta preencher!
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function show(Access $access)
    {
        return view('dashboard.pages.acessos.showacessos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function edit(Access $access)
    {
        //$accesses = Access::all();
        return view('dashboard.pages.acessos.editacessos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Access $access)
    {
        //$access->update($request->all());
        return redirect('accesses')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function destroy(Access $access)
    {
        //$access = Access::find($access->id);
        //$access->delete();
        return redirect('accesses')->with('status','Item edited successfully!');
    }
}
