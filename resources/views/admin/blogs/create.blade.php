@extends('admin.layout.app')

@section('title', 'Add Blog')
@section('page_title', 'Add Blog')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                @csrf

                @include('admin.blogs._form', ['blog' => $blog])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

