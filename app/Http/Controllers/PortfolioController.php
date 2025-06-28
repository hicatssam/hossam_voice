<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // Set language based on session or default to English
        $locale = Session::get('locale', 'en');
        App::setLocale($locale);

        // Get featured samples for the portfolio
        $samples = \App\Models\Sample::where('is_featured', true)
            ->orderBy('order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('portfolio.index', compact('locale', 'samples'));
    }

    public function setLanguage(Request $request)
    {
        $locale = $request->input('locale', 'en');

        // Validate locale
        if (in_array($locale, ['en', 'ar'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }

        return redirect()->back();
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        // Send email notification
        try {
            \Illuminate\Support\Facades\Mail::send([], [], function ($message) use ($request) {
                $message->to(config('mail.from.address'))
                    ->subject('New Contact Form Message - Hossam Portfolio')
                    ->html("
                        <h2>New Contact Form Submission</h2>
                        <p><strong>Name:</strong> {$request->name}</p>
                        <p><strong>Email:</strong> {$request->email}</p>
                        <p><strong>Project Type:</strong> {$request->project_type}</p>
                        <p><strong>Message:</strong></p>
                        <p>" . nl2br(e($request->message)) . "</p>
                        <p><strong>Submitted at:</strong> " . now()->format('Y-m-d H:i:s') . "</p>
                    ")
                    ->replyTo($request->email, $request->name);
            });

            return response()->json([
                'success' => true,
                'message' => Session::get('locale', 'en') === 'ar'
                    ? 'تم إرسال رسالتك بنجاح! سنتواصل معك قريباً.'
                    : 'Message sent successfully! We will contact you soon.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => Session::get('locale', 'en') === 'ar'
                    ? 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.'
                    : 'An error occurred while sending the message. Please try again.'
            ], 500);
        }
    }
}
