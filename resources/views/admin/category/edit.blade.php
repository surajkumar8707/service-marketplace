@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Create Categories</h5>
            </div>
            <div class="card-body">
                <form class="create-category" action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <lable for="name">Name</lable>
                        <input type="text" name="name" id="name" placeholder="Category name"
                            class="form-control @error('name') is-invalid @enderror "
                            value="{{ old('name', $category->name) }}">
                        @error('name')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <lable for="status">Status</lable>
                        <div class="form-check form-switch mb-2">
                            <input type="checkbox" name="status" @if ($category->status == 1) checked @endif id="status" class="form-check-input">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-sm btn-primary">Update</button>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
