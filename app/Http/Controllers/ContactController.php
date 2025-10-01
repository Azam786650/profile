<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Store Contact Form Messages
    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'is_read' => false,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }

    // Show Inbox (Protected by PIN)
    public function inbox()
    {
        // Check if mailbox is unlocked
        if (!session('mailbox_verified')) {
            return redirect()->route('contact.pin');
        }

        // Fetch messages
        $messages = Contact::latest()->get();

        // ✅ Do NOT mark them read here!
        return view('mailbox', compact('messages'));
    }

    // Verify PIN
    public function verifyPin(Request $request)
    {
        $correctPin = "4256"; // Your Secret PIN

        if ($request->pin === $correctPin) {
            session(['mailbox_verified' => true]); // Unlock mailbox
            return redirect()->route('contact.inbox');
        }

        return back()->withErrors(['pin' => 'Incorrect PIN!']);
    }

    // Mark message as read manually
    public function markAsRead($id)
    {
        $msg = Contact::findOrFail($id);
        $msg->update(['is_read' => true]);

        return back()->with('success', 'Message marked as read.');
    }

    // Logout & Lock Mailbox
    public function logout()
    {
        session()->forget('mailbox_verified');
        return redirect()->route('contact.pin')->with('success', 'Mailbox locked successfully!');
    }
    public static function unreadCount()
{
    return \App\Models\Contact::where('is_read', 0)->count();
}

}
