@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>College Management System</h1>
    <p class="lead">Welcome to the College Management System</p>
    
    <div class="mt-4">
        <a href="{{ route('colleges.index') }}" class="btn btn-primary btn-lg m-2">Manage Colleges</a>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary btn-lg m-2">Manage Departments</a>
    </div>
</div>
@endsection
