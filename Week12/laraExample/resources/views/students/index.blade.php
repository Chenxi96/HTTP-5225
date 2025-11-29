@extends('layouts/admin')
@section('content')
<div>
    <a href="{{ route('students.create') }}">Create</a>
</div>
<ul>
    @foreach($students as $student) 
        <li>
            {{$student -> fname }} {{$student -> lname}}
        </li>
        <form action="{{ route('students.edit', $student -> id )}}" method="GET">
            @csrf
            <button type="submit">Update</button>
        </form>
        <form action="{{ route('students.destroy', $student -> id )}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Delete</button>
        </form>

    @endforeach

</ul>

@endsection
