@php
    $isEdit = (bool) ($faq->id ?? false);
@endphp

<div class="mb-3">
    <label class="form-label">Question <span class="text-danger">*</span></label>
    <input type="text"
           name="question"
           class="form-control @error('question') is-invalid @enderror"
           value="{{ old('question', $faq->question) }}"
           required>
    @error('question') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Answer <span class="text-danger">*</span></label>
    <textarea name="answer"
              rows="4"
              class="form-control @error('answer') is-invalid @enderror"
              required>{{ old('answer', $faq->answer) }}</textarea>
    @error('answer') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

@php $status = old('status', $faq->status ?? true); @endphp
<div class="form-check form-switch mb-3">
    <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" {{ $status ? 'checked' : '' }}>
    <label class="form-check-label" for="status">Active</label>
</div>

