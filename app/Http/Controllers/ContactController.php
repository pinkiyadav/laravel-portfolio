<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:30',
            'project' => 'nullable|string|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:5000',
        ]);

        Mail::raw(
            "Name: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Phone: {$validated['phone']}\n" .
            "Project: {$validated['project']}\n\n" .
            "Message:\n{$validated['message']}",
            function ($mail) use ($validated) {

                $mail->to('pinki.ajay.y@gmail.com')
                     ->subject($validated['subject']);

                $mail->replyTo($validated['email'], $validated['name']);
            }
        );

        return back()->with(
            'success',
            'Thank you! Your message has been sent successfully.'
        );
    }
}
