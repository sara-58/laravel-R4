<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\http\RedirectResponse;

class ContactController extends Controller
{
    
    public function index()
    {
        $messages = Contact::get();
        return view('dashboard.messageList', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $request->validate(
            [
                'contactName' => 'required|string|max:100',
                'contactEmail' => 'required|email',
                'contactSubject' => 'required|string',
                'contactMessage' => 'required|string',
            ]
            );

        Contact::create($message);

        Mail::to('sara@example.com')->send(new ContactMail($message));
        return 'Message sent successfully';
    }

    public function create(Request $request)
    {
        return view ('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Contact::findOrFail($id);
        if (!$message->readed) {
            $message->update(['readed' => 1]);
        }

        $unreadCount = Contact::where('readed',0)->count();

        return view('dashboard.showMessage', compact('message', 'unreadCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->route('messages');
    }

    public function delete(string $id): RedirectResponse
    {
        Contact::where('id', $id)->forceDelete();
        return redirect()->route('trashedMessage');
    }

    public function trashed()
    {
        $messages = Contact::onlyTrashed()->get();
        return view('dashboard.trashedMessage', compact('messages'));
    }

    public function restore(string $id):RedirectResponse
    {
        Contact::where('id', $id)->restore();
        return redirect()->route('messages');
    }
}

