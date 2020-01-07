<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactFormsController extends Controller
{
    public function create()
    {
        return view('pages.contact.contact');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        Mail::to('info@sauzarhealthfoundation.org')->send(new ContactMail($data));

        return redirect()->back()->with('status', 'Inquiry Sent, We will get back to you as soon as possible');
    }
}
