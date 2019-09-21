@extends('layout')
@section('content')
    <br/><br/>
    <form action="{{ url('/create-department-post') }}" method="post">
        @csrf
        Dept Name
        <br/>
        <input type="text" name="department_name" required>
        <br/>
        Dept Short Name
        <br/>
        <input type="text" name="department_short_name" required>
        <br><br>
        <input type="submit" value="submit">
    </form>
@endsection

