@extends('admin.layout.app')

@section('title', 'Edit Team Member')
@section('page_title', 'Edit Team Member')

@section('content')
    <div class="mb-3">
        <a href="{{ route('admin.team-members.index') }}" class="btn btn-secondary btn-sm">
            &larr; Back to Team Members
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.team-members._form')
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Update Member</button>
                </div>
            </form>
        </div>
    </div>
@endsection
