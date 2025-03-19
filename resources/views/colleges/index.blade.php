@extends('layouts.app')

@section('title', 'Colleges')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Colleges</h1>
    <a href="{{ route('colleges.create') }}" class="btn btn-primary">Add New College</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>College Name</th>
                    <th>College Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($colleges as $college)
                    <tr>
                        <td>{{ $college->id }}</td>
                        <td>{{ $college->college_name }}</td>
                        <td>{{ $college->college_code }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('colleges.edit', $college) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('colleges.destroy', $college) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this college?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No colleges found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
