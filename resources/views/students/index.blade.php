@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
        <h1 class="display-2">
            View All Students
        </h1>
    </div>
</div>
<div class="row">
    @foreach ($students as $student)
        <div class="col-md-4">
            <div class="card p-3">
                <div class="card-title">
                    <h2>{{ $student -> fname }} {{ $student -> lname }}</h2>
                    <p>
                        {{ $student -> email }}
                    </p>
                </div>
                <div class="card-body">
                    <a href="{{ route('students.edit', $student -> id ) }}" class="card-link">
                        Edit
                    </a>
                    <a href="{{ route('students.trash', $student -> id) }}" class="card-link">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection