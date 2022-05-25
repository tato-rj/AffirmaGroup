<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Admin\ContactReceivedEmail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function submit(Request $request)
    {
        \Mail::to(config('mail.from.address'))->send((new ContactReceivedEmail($request)));

        return back()->with('success', 'Thanks for reaching out, we\'ll be in touch soon');
    }
}
