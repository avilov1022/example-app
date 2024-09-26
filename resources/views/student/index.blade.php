@extends('layouts/main')
@section('content')
    <h1>Students list</h1>
    @foreach($students as $student)
        <p>{{ $student->lname }}</p>
    @endforeach

@endsection()