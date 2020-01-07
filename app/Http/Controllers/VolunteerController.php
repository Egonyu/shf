<?php

namespace App\Http\Controllers;

use App\Mail\VolunteerMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function create()
    {
        return view('pages.volunteers.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phoneNo' => 'required',
            'address' => 'required',
            'employer' => 'required',
            'position' => 'required',
            'skills' => 'required',
            'areaofinterest' => 'required',
            'emergency_contact' => 'required',
            'physical_limitation' => 'required',
        ]);
        
        dd(request()->all());
        // Mail::to('info@sauzarhealthfoundation.org')->send(new VolunteerMail($data));

        // return redirect()->back()->with('status', 'Application Form Data Submitted');
    }
}
