@extends('admin.layout.app')

@section('title', 'Edit Course')
@section('page_title', 'Edit Course')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.courses.update', $course) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.courses._form', ['course' => $course])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

