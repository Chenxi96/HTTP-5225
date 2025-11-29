@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Add a Course
        </h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
        </div>
        <div class="mb-3">
            <label for="courseName" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="courseName" name="courseName" aria-describedby="courseName">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" aria-describedby="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection