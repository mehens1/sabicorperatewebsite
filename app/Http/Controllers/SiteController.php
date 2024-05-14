<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\Team;

class SiteController extends Controller
{
    public function index()
    {

        $advisory_team = Team::where('type', '=', 'advisory')->get(); // Replace with your actual data
        $directors = Team::where('type', '=', 'director')->get();
        return view('home', compact('advisory_team', 'directors'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function team($id)
    {
        $team_detail = Team::findOrFail($id);
        // return $team_detail;
        return view('team', compact('team_detail'));
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