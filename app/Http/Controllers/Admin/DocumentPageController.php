<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DocumentPageController extends Controller
{
    public function index()
    {
        $types = $this->types();
        $documents = DocumentPage::query()
            ->whereIn('page_type', array_keys($types))
            ->get()
            ->keyBy('page_type');

        return view('admin.documents.index', compact('types', 'documents'));
    }

    public function create(string $pageType)
    {
        $types = $this->types();
        abort_unless(array_key_exists($pageType, $types), 404);

        $existing = DocumentPage::query()->where('page_type', $pageType)->first();
        if ($existing) {
            return redirect()->route('admin.documents.edit', $existing);
        }

        $document = new DocumentPage(['page_type' => $pageType, 'status' => true]);

        return view('admin.documents.create', compact('document', 'types'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);
        $data['status'] = $request->boolean('status');
        $data['created_by'] = Auth::id();
        $data['updated_by'] = Auth::id();

        DocumentPage::create($data);

        return redirect()->route('admin.documents.index')->with('success', 'Document saved successfully.');
    }

    public function edit(DocumentPage $document)
    {
        $types = $this->types();
        abort_unless(array_key_exists($document->page_type, $types), 404);

        return view('admin.documents.edit', compact('document', 'types'));
    }

    public function update(Request $request, DocumentPage $document)
    {
        $data = $this->validateData($request, $document->id);
        $data['status'] = $request->boolean('status');
        $data['updated_by'] = Auth::id();

        $document->update($data);

        return redirect()->route('admin.documents.index')->with('success', 'Document updated successfully.');
    }

    private function validateData(Request $request, ?int $ignoreId = null): array
    {
        $allowedTypes = array_keys($this->types());

        return $request->validate([
            'page_type' => [
                'required',
                'string',
                Rule::in($allowedTypes),
                Rule::unique('document_pages', 'page_type')->ignore($ignoreId),
            ],
            'content' => ['required', 'string'],
        ]);
    }

    private function types(): array
    {
        return [
            'terms_condition' => 'Terms & Conditions',
            'privacy_policy' => 'Privacy Policy',
            'disclaimer' => 'Disclaimer',
            'refund' => 'Refund Policy',
        ];
    }
}

