<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display the landing page
     */
    public function index()
    {
        return view('landing');
    }

    /**
     * Handle newsletter subscription
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:newsletter_subscriptions,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Store subscription in database (you'll need to create this table)
            // NewsletterSubscription::create([
            //     'first_name' => $request->first_name,
            //     'email' => $request->email,
            //     'subscribed_at' => now(),
            // ]);

            // Send welcome email (optional)
            // Mail::to($request->email)->send(new WelcomeEmail($request->first_name));

            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing! Welcome to Salex.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    /**
     * Handle demo request
     */
    public function requestDemo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Store demo request in database
            // DemoRequest::create($request->all());

            // Send notification email to sales team
            // Mail::to('sales@salex.com')->send(new DemoRequestEmail($request->all()));

            return response()->json([
                'success' => true,
                'message' => 'Demo request submitted! Our team will contact you within 24 hours.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    /**
     * Handle contact form submission
     */
    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Store contact message in database
            // ContactMessage::create($request->all());

            // Send notification email
            // Mail::to('support@salex.com')->send(new ContactFormEmail($request->all()));

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully! We\'ll get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }
}