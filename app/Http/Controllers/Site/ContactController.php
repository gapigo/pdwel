<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(view:'site.contact.index');
    }
    public function form(Request $request)
    {
        $contact = Contact::create($request->all());
        // Notification::route(channel:'mail', route:$contact->email)->notify(new NewContact($contact));
        Notification::route(channel:'mail', route:config(key:'mail.from.address'))
        ->notify(new NewContact($contact));
        
        ddd($request->all());
    }
}
