@extends('admin.layout.app')

@section('title', 'Edit Document')
@section('page_title', 'Edit Document')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.documents.update', $document) }}">
                @csrf
                @method('PUT')

                @include('admin.documents._form', ['document' => $document, 'types' => $types])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

