@php
    $isEdit = (bool) ($course->id ?? false);
@endphp

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Title <span class="text-danger">*</span></label>
                    <input name="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $course->title) }}"
                           required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input name="slug"
                           class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug', $course->slug) }}"
                           placeholder="Auto-generated if empty">
                    @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <input type="date"
                               name="start_date"
                               class="form-control @error('start_date') is-invalid @enderror"
                               value="{{ old('start_date', optional($course->start_date)->format('Y-m-d')) }}">
                        @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Duration</label>
                        <input name="duration"
                               class="form-control @error('duration') is-invalid @enderror"
                               value="{{ old('duration', $course->duration) }}"
                               placeholder="e.g. 3 months">
                        @error('duration') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Lectures</label>
                        <input type="number"
                               min="0"
                               name="lectures"
                               class="form-control @error('lectures') is-invalid @enderror"
                               value="{{ old('lectures', $course->lectures) }}">
                        @error('lectures') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fees (Rs)</label>
                        <input type="number"
                               min="0"
                               name="fees"
                               class="form-control @error('fees') is-invalid @enderror"
                               value="{{ old('fees', $course->fees) }}">
                        @error('fees') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description"
                              rows="3"
                              class="form-control @error('short_description') is-invalid @enderror"
                              maxlength="500">{{ old('short_description', $course->short_description) }}</textarea>
                    @error('short_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mt-3">
                    <label class="form-label">Long Description</label>
                    <textarea id="js-summernote"
                              name="long_description"
                              class="form-control @error('long_description') is-invalid @enderror"
                              rows="10">{{ old('long_description', $course->long_description) }}</textarea>
                    @error('long_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="h6 mb-0">Reviews</div>
                    <button type="button" class="btn btn-outline-primary btn-sm" id="js-add-review">Add Review</button>
                </div>

                <div id="js-reviews">
                    @php
                        $oldNames = old('review_name');
                        $reviews = [];

                        if (is_array($oldNames)) {
                            $count = count($oldNames);
                            for ($i = 0; $i < $count; $i++) {
                                $reviews[] = [
                                    'name' => old('review_name.' . $i),
                                    'rating' => old('review_rating.' . $i),
                                    'text' => old('review_text.' . $i),
                                    'image' => old('review_existing_image.' . $i),
                                ];
                            }
                        } else {
                            $reviews = ($course->reviews ?? collect())->map(fn ($r) => [
                                'name' => $r->name,
                                'rating' => $r->rating,
                                'text' => $r->text,
                                'image' => $r->image,
                            ])->values()->all();
                        }
                    @endphp

                    @forelse ($reviews as $i => $review)
                        <div class="border rounded p-3 mb-3 js-review-row">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="fw-medium">Review</div>
                                <button type="button" class="btn btn-outline-danger btn-sm js-remove-review">Remove</button>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Name</label>
                                    <input name="review_name[]"
                                           class="form-control"
                                           value="{{ $review['name'] }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Rating (1-5)</label>
                                    <input type="number" min="1" max="5" name="review_rating[]" class="form-control" value="{{ $review['rating'] }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="review_image[]" class="form-control">
                                    <input type="hidden" name="review_existing_image[]" value="{{ $review['image'] }}">
                                    @if (!empty($review['image']))
                                        <div class="small text-muted mt-1">Keeping existing image</div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Text</label>
                                    <textarea name="review_text[]" rows="3" class="form-control">{{ $review['text'] }}</textarea>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-muted small">No reviews added yet.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">Images</div>

                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror">
                    @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    @if ($isEdit && $course->thumbnail)
                        <div class="small text-muted mt-1">{{ $course->thumbnail }}</div>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    @if ($isEdit && $course->image)
                        <div class="small text-muted mt-1">{{ $course->image }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">Instructor</div>

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="instructor_name" class="form-control" value="{{ old('instructor_name', $course->instructor_name) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input name="instructor_position" class="form-control" value="{{ old('instructor_position', $course->instructor_position) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="instructor_image" class="form-control @error('instructor_image') is-invalid @enderror">
                    @error('instructor_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    @if ($isEdit && $course->instructor_image)
                        <div class="small text-muted mt-1">{{ $course->instructor_image }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">SEO + Status</div>

                <div class="mb-3">
                    <label class="form-label">Meta Title</label>
                    <input name="meta_title" class="form-control" value="{{ old('meta_title', $course->meta_title) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ old('meta_description', $course->meta_description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Meta Keywords</label>
                    <input name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $course->meta_keywords) }}" placeholder="comma,separated,keywords">
                </div>

                <div class="mb-3">
                    <label class="form-label">Rating (1-5)</label>
                    <input type="number" min="1" max="5" name="rating" class="form-control" value="{{ old('rating', $course->rating) }}">
                </div>

                <div class="form-check form-switch">
                    @php $status = old('status', $course->status ?? true); @endphp
                    <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" {{ $status ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">Active</label>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
    <script>
        $('#js-summernote').summernote({
            height: 260
        });

        const reviewsWrap = document.getElementById('js-reviews');
        const addBtn = document.getElementById('js-add-review');

        function bindRemoveButtons() {
            reviewsWrap.querySelectorAll('.js-remove-review').forEach((btn) => {
                btn.onclick = () => btn.closest('.js-review-row').remove();
            });
        }

        addBtn?.addEventListener('click', () => {
            const row = document.createElement('div');
            row.className = 'border rounded p-3 mb-3 js-review-row';
            row.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="fw-medium">Review</div>
                    <button type="button" class="btn btn-outline-danger btn-sm js-remove-review">Remove</button>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Name</label>
                        <input name="review_name[]" class="form-control" value="">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Rating (1-5)</label>
                        <input type="number" min="1" max="5" name="review_rating[]" class="form-control" value="">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Image</label>
                        <input type="file" name="review_image[]" class="form-control">
                        <input type="hidden" name="review_existing_image[]" value="">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Text</label>
                        <textarea name="review_text[]" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            `;
            reviewsWrap.appendChild(row);
            bindRemoveButtons();
        });

        bindRemoveButtons();
    </script>
@endpush

