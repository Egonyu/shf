<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;


class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.careers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'employer' => 'required',
            'email' => 'required',
            'special_talent' => 'required',
            'volunteering_field' => 'required',
            'physical_limitations' => 'required',
            'emergency_contact' => 'required',
        ]);
        // $careers = new Career($request, [
        //     $careers->names = $request->names,
        //     $careers->address = $request->address,
        //     $careers->city = $request->city,
        //     $careers->state = $request->state,
        //     $careers->zip = $request->zip,
        //     $careers->phone = $request->phone,
        //     $careers->email = $request->email,
        //     $careers->employer = $request->employer,
        //     $careers->position = $request->position,
        //     $careers->special_talent = $request->special_talent,
        //     $careers->volunteering_field = $request->volunteering_field,
        //     $careers->physical_limitations = $request->physical_limitations,
        //     $careers->emergency_contact = $request->emergency_contact,
        // ]);

        Career::create($request->all());

        return redirect()->back()->with('status', 'Your applications was saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
