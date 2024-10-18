<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function send(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('jenderalimport@gmail.com')->send(new ContactFormMail($details));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
