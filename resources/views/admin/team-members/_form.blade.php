{{-- Name --}}
<div class="mb-3">
    <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $teamMember->name ?? '') }}" placeholder="e.g. John Doe">
    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

{{-- Position --}}
<div class="mb-3">
    <label class="form-label fw-semibold">Position / Role</label>
    <input type="text" name="position" class="form-control @error('position') is-invalid @enderror"
           value="{{ old('position', $teamMember->position ?? '') }}" placeholder="e.g. Founder & CEO">
    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

{{-- Image --}}
<div class="mb-3">
    <label class="form-label fw-semibold">Photo</label>
    <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror"
           id="memberImageInput">
    @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror

    <div class="mt-2" id="imagePreviewWrap">
        @if(!empty($teamMember->image))
            <img id="memberImagePreview" src="{{ asset('storage/' . $teamMember->image) }}"
                 alt="Current Photo" style="height:90px;width:90px;object-fit:cover;border-radius:50%;border:2px solid #dee2e6;">
        @else
            <img id="memberImagePreview" src="" alt=""
                 style="height:90px;width:90px;object-fit:cover;border-radius:50%;border:2px solid #dee2e6;display:none;">
        @endif
    </div>
</div>

{{-- Social Links --}}
<div class="row mb-3">
    <div class="col-md-4">
        <label class="form-label fw-semibold">Facebook URL</label>
        <input type="url" name="facebook_url" class="form-control @error('facebook_url') is-invalid @enderror"
               value="{{ old('facebook_url', $teamMember->facebook_url ?? '') }}"
               placeholder="https://facebook.com/...">
        @error('facebook_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">LinkedIn URL</label>
        <input type="url" name="linkedin_url" class="form-control @error('linkedin_url') is-invalid @enderror"
               value="{{ old('linkedin_url', $teamMember->linkedin_url ?? '') }}"
               placeholder="https://linkedin.com/...">
        @error('linkedin_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Twitter / X URL</label>
        <input type="url" name="twitter_url" class="form-control @error('twitter_url') is-invalid @enderror"
               value="{{ old('twitter_url', $teamMember->twitter_url ?? '') }}"
               placeholder="https://twitter.com/...">
        @error('twitter_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

{{-- Order & Status --}}
<div class="row mb-3">
    <div class="col-md-4">
        <label class="form-label fw-semibold">Display Order</label>
        <input type="number" name="order" min="0" class="form-control @error('order') is-invalid @enderror"
               value="{{ old('order', $teamMember->order ?? 0) }}" placeholder="0">
        <small class="text-muted">Lower number = shown first</small>
        @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-4 d-flex align-items-center mt-3 mt-md-0">
        <div class="form-check form-switch mt-4">
            <input type="hidden" name="status" value="0">
            <input class="form-check-input" type="checkbox" name="status" value="1" id="statusToggle"
                   {{ old('status', $teamMember->status ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="statusToggle">Published</label>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('memberImageInput').addEventListener('change', function () {
    var preview = document.getElementById('memberImagePreview');
    var file = this.files[0];
    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
});
</script>
@endpush
