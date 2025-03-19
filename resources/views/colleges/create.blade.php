@extends('layouts.app')

@section('title', 'Add College')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Add New College</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('colleges.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="college_name" class="form-label">College Name</label>
                <input type="text" class="form-control @error('college_name') is-invalid @enderror" id="college_name" name="college_name" value="{{ old('college_name') }}" required>
                @error('college_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="college_code" class="form-label">College Code</label>
                <input type="text" class="form-control @error('college_code') is-invalid @enderror" id="college_code" name="college_code" value="{{ old('college_code') }}" required>
                @error('college_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
