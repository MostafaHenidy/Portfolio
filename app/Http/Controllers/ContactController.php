<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
            'nda' => 'nullable|boolean'
        ]);

        Mail::to('mostafahenidy222@gmail.com')->send(new ContactFormMail($data));

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
