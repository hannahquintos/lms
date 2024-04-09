@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Create a Student Profile
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('students.store') }}" method="POST">
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
                <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="courses" class="form-label">Select Course</label>
                <select name="courses" id="courses">
                    @foreach ($courses as $course)
                        <option value="{{ $course -> id }}">
                            {{ $course -> courseName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection