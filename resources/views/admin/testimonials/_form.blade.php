@php
    $isEdit = (bool) ($testimonial->id ?? false);
@endphp

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-body">

                {{-- Name --}}
                <div class="mb-3">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $testimonial->name) }}"
                           placeholder="Client / Person name"
                           required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Testimonial Text --}}
                <div class="mb-3">
                    <label class="form-label">Testimonial Text</label>
                    <textarea name="text"
                              rows="5"
                              class="form-control @error('text') is-invalid @enderror"
                              placeholder="What did they say about you?">{{ old('text', $testimonial->text) }}</textarea>
                    @error('text')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Rating --}}
                <div class="mb-3">
                    <label class="form-label">Rating <span class="text-danger">*</span></label>
                    <div class="d-flex gap-2 align-items-center flex-wrap" id="star-rating-wrap">
                        @php $currentRating = old('rating', $testimonial->rating ?? 5); @endphp
                        @for($star = 1; $star <= 5; $star++)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                       type="radio"
                                       name="rating"
                                       id="star{{ $star }}"
                                       value="{{ $star }}"
                                       {{ (int)$currentRating === $star ? 'checked' : '' }}
                                       required>
                                <label class="form-check-label" for="star{{ $star }}">
                                    @for($i = 1; $i <= $star; $i++)
                                        <i class="ri-star-fill text-warning"></i>
                                    @endfor
                                    <span class="ms-1 text-muted small">{{ $star }}/5</span>
                                </label>
                            </div>
                        @endfor
                    </div>
                    @error('rating')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4">
        {{-- Image Upload --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">Client Photo</div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file"
                           name="image"
                           accept="image/*"
                           class="form-control @error('image') is-invalid @enderror"
                           id="image-input">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Image Preview --}}
                <div id="image-preview-wrap" class="{{ ($isEdit && $testimonial->image) ? '' : 'd-none' }} mt-2">
                    <p class="text-muted small mb-1">Current image:</p>
                    <img id="image-preview"
                         src="{{ ($isEdit && $testimonial->image) ? asset('storage/' . $testimonial->image) : '' }}"
                         alt="Preview"
                         class="img-thumbnail"
                         style="max-height:120px;">
                </div>
            </div>
        </div>

        {{-- Status --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">Visibility</div>
                @php $status = old('status', $testimonial->status ?? true); @endphp
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                           id="status" name="status" value="1"
                           {{ $status ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">Active (visible on website)</label>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Live image preview
    document.getElementById('image-input').addEventListener('change', function () {
        const file = this.files[0];
        if (!file) return;
        const wrap    = document.getElementById('image-preview-wrap');
        const preview = document.getElementById('image-preview');
        preview.src   = URL.createObjectURL(file);
        wrap.classList.remove('d-none');
    });
</script>
@endpush
