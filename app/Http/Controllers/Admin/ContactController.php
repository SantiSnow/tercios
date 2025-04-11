<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Contacts', [
            'contacts' => Contact::orderBy('id', 'desc')->paginate(20)
        ]);
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contacts');
    }

    public function newsletter()
    {
        return Inertia::render('Admin/Newsletter', [
            'contacts' => NewsletterSubscriber::orderBy('id', 'desc')->paginate(20)
        ]);
    }
}
