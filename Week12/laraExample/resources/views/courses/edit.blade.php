@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Update Course Profile
        </h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('courses.update', $course -> id )}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ $course -> name }}">
        </div>
        <div class="mb-3">
            <label for="courseName" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="courseName" name="courseName" aria-describedby="courseName" value="{{ $course -> courseName }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" aria-describedby="description" value="{{ $course -> description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection