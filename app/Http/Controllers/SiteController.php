<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contactForm(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);        

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        $contactForm = ContactForm::where('name', $data['name'])
        ->where('email', $data['email'])
        ->where('phone_number', $data['phone_number'])
        ->where('subject', $data['subject'])
        ->first();
        
        if ($contactForm) {
            return back()->withErrors(['fail' => 'Hello ' . $data['name'] . ', You have already sent this message. We will get back to you shortly! Thank you!']);
        } else {
            try {
                $contactForm = ContactForm::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone_number' => $data['phone_number'],
                    'subject' => $data['subject'],
                    'message' => $data['message']
                ]);
        
                return back()->with('success', 'Hello ' . $data['name'] . ', Thank you for reaching out to us. Your message is important to us. We will get back to you shortly! Thank you!');
            } catch (\Exception $e) {
                return back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
            }
        }
    }
}
