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
            'state' => 'required',
            'city' => 'required',
        ]);

        Mail::to('career@sauzarhealthfoundation.org')
        ->send(new VolunteerMail($data));

        return redirect()->back()
        ->with('status', 'Inquiry Sent, We will get back to you as soon as possible');
    }
}
