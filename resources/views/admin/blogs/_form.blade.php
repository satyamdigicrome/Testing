@php
    $isEdit = (bool) ($blog->id ?? false);
@endphp

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $blog->name) }}"
                           required>
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input name="slug"
                           class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug', $blog->slug) }}"
                           placeholder="Auto-generated if empty">
                    @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description"
                              rows="3"
                              maxlength="500"
                              class="form-control @error('short_description') is-invalid @enderror">{{ old('short_description', $blog->short_description) }}</textarea>
                    @error('short_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Long Description</label>
                    <textarea id="js-summernote"
                              name="long_description"
                              class="form-control @error('long_description') is-invalid @enderror"
                              rows="10">{{ old('long_description', $blog->long_description) }}</textarea>
                    @error('long_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">Author</div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Author Name</label>
                        <input name="author_name" class="form-control" value="{{ old('author_name', $blog->author_name) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Author Image</label>
                        <input type="file" name="author_image" class="form-control @error('author_image') is-invalid @enderror">
                        @error('author_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        @if ($isEdit && $blog->author_image)
                            <div class="small text-muted mt-1">{{ $blog->author_image }}</div>
                        @endif
                    </div>
                    <div class="col-12">
                        <label class="form-label">Author Description</label>
                        <textarea name="author_description" rows="3" class="form-control">{{ old('author_description', $blog->author_description) }}</textarea>
                    </div>
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
                    @if ($isEdit && $blog->thumbnail)
                        <div class="small text-muted mt-1">{{ $blog->thumbnail }}</div>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    @if ($isEdit && $blog->image)
                        <div class="small text-muted mt-1">{{ $blog->image }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="h6 mb-3">Tags + Status</div>

                <div class="mb-3">
                    <label class="form-label">Tags (comma separated)</label>
                    <input name="tags"
                           class="form-control @error('tags') is-invalid @enderror"
                           value="{{ old('tags', $blog->tags) }}"
                           placeholder="e.g. laravel,php,web">
                    @error('tags') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                @php $status = old('status', $blog->status ?? true); @endphp
                <div class="form-check form-switch">
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
        $('#js-summernote').summernote({ height: 260 });
    </script>
@endpush

