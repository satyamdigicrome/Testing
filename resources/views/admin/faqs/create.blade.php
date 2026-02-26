@extends('admin.layout.app')

@section('title', 'Add FAQ')
@section('page_title', 'Add FAQ')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.faqs.store') }}">
                @csrf

                @include('admin.faqs._form', ['faq' => $faq])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

