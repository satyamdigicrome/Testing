<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => ['required', 'string', 'max:255'],
            'phone'  => ['required', 'string', 'max:20'],
            'email'  => ['nullable', 'email', 'max:255'],
            'source' => ['nullable', 'string', 'max:500'],
        ]);

        Lead::create($validated);

        return response()->json(['success' => true, 'message' => 'Thank you! We will contact you shortly.']);
    }
}
