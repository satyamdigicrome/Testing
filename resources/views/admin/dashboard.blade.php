@extends('admin.layout.app')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    <div class="row g-3">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted small">Module</div>
                    <div class="h5 mb-0">Courses</div>
                    <div class="mt-3">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.courses.index') }}">Manage Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

