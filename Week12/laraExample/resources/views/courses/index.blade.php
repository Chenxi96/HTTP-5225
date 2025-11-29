@extends('layouts/admin')
@section('content')
<div>
    <a href="{{ route('courses.create') }}">Create</a>
</div>

@foreach($courses as $course) 
    <div>
        <p>Name:{{ $course -> name}}</p>
        <p>Course Name : {{ $course -> courseName}}</p>
        <form action="{{ route('courses.edit', $course -> id )}}" method="GET">
        @csrf
        <button type="submit">Update</button>
        </form>
        <form action="{{ route('courses.destroy', $course -> id )}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Delete</button>
        </form>
    </div>
    

@endforeach

@endsection