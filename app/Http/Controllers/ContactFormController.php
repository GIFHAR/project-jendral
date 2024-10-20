<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function send(Request $request)
{
    try {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('jenderalimport@gmail.com')->send(new ContactFormMail($details));

        return redirect('/contact')->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        return redirect('/contact')->with('error', 'Failed to send your message. Please try again.');
    }
}
}
