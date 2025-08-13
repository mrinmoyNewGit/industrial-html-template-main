<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'subject', 'message');

        // 1️⃣ Send email to admin/support
        Mail::send('emails.contact-admin', $data, function ($mail) use ($data) {
            $mail->to('support@vmml.com')
                 ->subject('New Contact Form Submission: ' . $data['subject']);
        });

        // 2️⃣ Send thank-you email to the user
        Mail::send('emails.contact-user', $data, function ($mail) use ($data) {
            $mail->to($data['email'])
                 ->subject('Thank you for contacting us');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

