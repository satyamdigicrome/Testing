<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactQuery;

class ContactQueryController extends Controller
{
    public function index()
    {
        $queries = ContactQuery::latest('id')->paginate(20);

        // Mark all unread as read when viewed
        ContactQuery::where('is_read', false)->update(['is_read' => true]);

        return view('admin.contact-queries.index', compact('queries'));
    }

    public function show(ContactQuery $contactQuery)
    {
        return view('admin.contact-queries.show', compact('contactQuery'));
    }

    public function destroy(ContactQuery $contactQuery)
    {
        $contactQuery->delete();
        return redirect()->route('admin.contact-queries.index')
            ->with('success', 'Query deleted successfully.');
    }
}
