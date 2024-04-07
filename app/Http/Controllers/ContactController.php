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
        $slider = Slider::all();
        $information = Information::first();
        $commercial = Commercial::first();
        $residential = Residential::first();
        $factory = Factory::first();
        $disinfection = Disinfection::first();

        return view('index', compact('information', 'slider', 'commercial', 'residential', 'factory', 'disinfection'));
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
                'first_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'company' => 'required',
                'message' => 'required|string',
            ], [
                'first_name.required' => 'First name is required.',
                'email.required' => 'Email is required.',
                'email.email' => 'Email must be in a valid format.',
                'phone_number.required' => 'Phone number is required.',
                'company.required' => 'Company is required.',
                'message.required' => 'Message is required.',
                'message.string' => 'Message must be a string.',
            ]);

            $formData = $request->all();

            Contact::create($formData);

            Mail::to($formData['email'])->send(new TestEmail($formData));

            Mail::to('1017website@gmail.com')->send(new ContactMail($formData));

            return redirect()->route('home', '#contactform')->with(['success' => 'You have already submitted the form!']);
        } catch (\Exception $e) {
            return redirect()->route('home', '#contactform')->with('error', 'Failed to save the data. Put in a valid format.');
        }
    }
}
