@extends('admin.layout.app')

@section('title', 'Edit Blog')
@section('page_title', 'Edit Blog')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.blogs._form', ['blog' => $blog])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

