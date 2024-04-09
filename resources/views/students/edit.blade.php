@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Edit a Student Profile
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('students.update', $student -> id) }}" method="PUT">
            @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ csrf_field() }}
            <div class="form-group">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="First Name" value="{{ $student -> fname }}">
            </div>
            <div class="form-group">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" placeholder="Last Name" value="{{ $student -> lname }}">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Email" value="{{ $student -> email }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection