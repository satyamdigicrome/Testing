<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::orderBy('order')->latest('id')->paginate(15);
        return view('admin.team-members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'position'      => ['nullable', 'string', 'max:255'],
            'image'         => ['nullable', 'image', 'max:4096'],
            'facebook_url'  => ['nullable', 'url', 'max:500'],
            'linkedin_url'  => ['nullable', 'url', 'max:500'],
            'twitter_url'   => ['nullable', 'url', 'max:500'],
            'order'         => ['nullable', 'integer', 'min:0'],
            'status'        => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/team', 'public');
        }

        $validated['status']     = $request->boolean('status');
        $validated['created_by'] = Auth::id();
        $validated['order']      = $validated['order'] ?? 0;

        TeamMember::create($validated);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member added successfully.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'position'      => ['nullable', 'string', 'max:255'],
            'image'         => ['nullable', 'image', 'max:4096'],
            'facebook_url'  => ['nullable', 'url', 'max:500'],
            'linkedin_url'  => ['nullable', 'url', 'max:500'],
            'twitter_url'   => ['nullable', 'url', 'max:500'],
            'order'         => ['nullable', 'integer', 'min:0'],
            'status'        => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/team', 'public');
        } else {
            unset($validated['image']);
        }

        $validated['status'] = $request->boolean('status');
        $validated['order']  = $validated['order'] ?? 0;

        $teamMember->update($validated);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member deleted successfully.');
    }
}
