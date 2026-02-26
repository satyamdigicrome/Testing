@php
    $isEdit = (bool) ($document->id ?? false);
@endphp

<div class="mb-3">
    <label class="form-label">Page Type <span class="text-danger">*</span></label>
    <select name="page_type"
            class="form-select @error('page_type') is-invalid @enderror"
            {{ $isEdit ? 'disabled' : '' }}>
        <option value="">Select type</option>
        @foreach($types as $value => $label)
            <option value="{{ $value }}" {{ old('page_type', $document->page_type) === $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    @if($isEdit)
        <input type="hidden" name="page_type" value="{{ $document->page_type }}">
    @endif
    @error('page_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Content <span class="text-danger">*</span></label>
    <textarea id="js-doc-content"
              name="content"
              class="form-control @error('content') is-invalid @enderror"
              rows="12">{{ old('content', $document->content) }}</textarea>
    @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

@php $status = old('status', $document->status ?? true); @endphp
<div class="form-check form-switch mb-3">
    <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" {{ $status ? 'checked' : '' }}>
    <label class="form-check-label" for="status">Active</label>
</div>

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
    <script>
        $('#js-doc-content').summernote({ height: 320 });
    </script>
@endpush

