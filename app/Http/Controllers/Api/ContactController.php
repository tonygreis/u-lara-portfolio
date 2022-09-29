<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        Mail::to('laraveller2021@gmail.com')->send(new ContactMail($request->name, $request->email, $request->body));

        return response()->json('success');
    }
}
