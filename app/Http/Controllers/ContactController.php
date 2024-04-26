<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Slider;
use App\Models\Commercial;
use App\Models\Factory;
use App\Models\Disinfection;
use App\Models\Residential;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\TestEmail;

class ContactController extends Controller
{
    public function index()
    {
        $information = Information::first();

        return view('contacts.index', compact('information'));
    }

    public function test_view()
    {
        return view('emails.contact');
    }
    public function store(Request $request)
    {
        try {
            // Validate the form input
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required|string',
            ], [
                'name.required' => 'Name is required.',
                'email.required' => 'Email is required.',
                'email.email' => 'Email must be in a valid format.',
                'message.required' => 'Message is required.',
                'message.string' => 'Message must be a string.',
            ]);

            $formData = $request->all();

            Contact::create($formData);

            // Mail::to($formData['email'])->send(new TestEmail($formData));

            // Mail::to('1017website@gmail.com')->send(new ContactMail($formData));

            return redirect()->route('home', '#contactform')->with(['success' => 'You have already submitted the form!']);
        } catch (\Exception $e) {
            return redirect()->route('home', '#contactform')->with('error', 'Failed to save the data. Put in a valid format.');
        }
    }
}
