@extends('layout')
@section('content')
    <br/><br/>
    <form action="{{ url('/edit-department-post') }}" method="post">
        @csrf
        Dept Name
        <br/>
        <input type="text" value="{{ $department->department_name }}" name="department_name" required>
        <br/>
        Dept Short Name
        <br/>
        <input type="text" name="department_short_name" value="{{ $department->department_short_name }}" required>
        <input type="hidden" value='{{ $department->id }}' , name="id" required>
        <br><br>
        <input type="submit" value="submit">
    </form>
@endsection
