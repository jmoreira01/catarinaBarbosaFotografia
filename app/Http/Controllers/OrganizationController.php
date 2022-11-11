<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'logo'               => 'required',
            'name'               => 'required',
            'email'              => 'required',
            'phone_number'       => 'required',
            'address'            => 'required',
            'city'               => 'required',
            'country'            => 'required',
            'postal_code'        => 'required',
            'facebook'           => 'required',
            'instagram'          => 'required',
            'linkedin'           => 'required',

        ]);

        $organization = new Organization();
        $organization->logo           = $request->logo;
        $organization->name             = $request->name;
        $organization->email            = $request->email;
        $organization->phone_number     = $request->phone_number;
        $organization->address          = $request->address;
        $organization->city             = $request->city;
        $organization->country          = $request->country;
        $organization->postal_code      = $request->postal_code;
        $organization->facebook         = $request->facebook;
        $organization->instagram        = $request->instagram;
        $organization->linkedin         = $request->linkedin;
        $organization->save();

        return redirect('organizations')->with('status','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        $organizations = Organization::all();
        return view('dashboard.pages.empresa.showempresa', ['organization' => $organization]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        $organizations = Organization::all();
        return view('dashboard.pages.empresa.editempresa' , ['organization' => $organization]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $organization                     = Organization::find($organization->id);

        $organization->logo             = $request->logo;
        $organization->name             = $request->name;
        $organization->email            = $request->email;
        $organization->phone_number     = $request->phone_number;
        $organization->address          = $request->address;
        $organization->city             = $request->city;
        $organization->country          = $request->country;
        $organization->postal_code      = $request->postal_code;
        $organization->facebook         = $request->facebook;
        $organization->instagram        = $request->instagram;
        $organization->linkedin         = $request->linkedin;

        $organization->save();

        return redirect('organizations/1')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization = Organization::find($organization->id);
        $organization->delete();
        return redirect('organizations')->with('status','Item deleted successfully!');
    }
}
