@extends('admin.layout.app')

@section('title', 'Add Course')
@section('page_title', 'Add Course')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                @csrf
                @include('admin.courses._form', ['course' => $course])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

