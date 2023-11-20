<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Assuming your Blade template is named "contact.blade.php"
    }

    public function submit(Request $request)
    {
        // Handle form submission and validation here
        // You can use $request to access form input data
    
        // Example: validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required',
            'message' => 'required',
        ]);
    
        // Example: saving form data to a database
        $contact = new Contact; // Create a new Contact model instance
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->contact_no = $request->input('contact_no');
        $contact->message = $request->input('message');
        $contact->save(); // Save the data to the database
    
        // Redirect back with a success message
        return redirect()->route('contact')->with('success', 'Form submitted successfully');
    }
}
