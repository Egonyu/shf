<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail;
use App\Http\Requests\ContactFormRequest;
use App\ContactUS;
// use App\Contact;

class ContactUsController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUs()
   {
       return view('pages.contact.contact');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {
    //    $contact = [];
    //    $contact['name'] = $request->get('name');
    //    $contact['email'] = $request->get('email');
    //    $contact['subject'] = $request->get('subject');
    //    $contact['message'] = $request->get('message');

       $contact = new ContactUS();
        $contact->name = $request->name;
        $contact->number = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        // $contact->save();

       Mail::send(new ContactSendMail($request));

    //    Mail::to($contact['email'])->send(new ContactSendMail($contact));
       
       flash('Your message has been sent!')->success();
 
       return back()->with('success', 'Thanks for contacting us!');
   }
}
