@extends('admin.layout.app')

@section('title', 'Edit Testimonial')
@section('page_title', 'Edit Testimonial')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST"
                  action="{{ route('admin.testimonials.update', $testimonial) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.testimonials._form', ['testimonial' => $testimonial])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
