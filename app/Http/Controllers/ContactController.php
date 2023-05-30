<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMailRequest;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(ContactMailRequest $request)
    {
        $mail = new ContactMailable($request->content, $request->first_name, $request->last_name);
        Mail::to('guichos-mx@outlook.com')->queue($mail);
        return back();
    }
}
