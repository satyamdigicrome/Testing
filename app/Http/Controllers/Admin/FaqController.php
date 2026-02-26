<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::query()->latest('id')->paginate(20);

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        $faq = new Faq();

        return view('admin.faqs.create', compact('faq'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);
        $data['status'] = $request->boolean('status');
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        Faq::create($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $data = $this->validateData($request);
        $data['status'] = $request->boolean('status');
        $data['updated_by'] = Auth::id();

        $faq->update($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully.');
    }

    private function validateData(Request $request): array
    {
        return $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
        ]);
    }
}

