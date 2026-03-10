<?php

namespace App\Http\Controllers;

use App\Models\ContactQuery;
use Illuminate\Http\Request;

class ContactQueryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'email'       => ['required', 'email', 'max:255'],
            'phone'       => ['nullable', 'string', 'max:30'],
            'msg_subject' => ['nullable', 'string', 'max:255'],
            'message'     => ['required', 'string'],
        ]);

        ContactQuery::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'] ?? null,
            'subject' => $validated['msg_subject'] ?? null,
            'message' => $validated['message'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your message has been received. We will get back to you shortly.',
        ]);
    }
}
