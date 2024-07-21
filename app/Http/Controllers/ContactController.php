<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('training.contact-us.index');
    }
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'contact_method' => 'required|string|in:email,phone',
            'message' => 'required|string',
        ]);

        Mail::to(env('MAIL_TO'))->send(new ContactMessage($validated));

        return redirect()->back();
    }
}
