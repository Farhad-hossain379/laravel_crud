@extends('layout')
@section('content')
    <a href="{{ url('/create-department') }}" >Create new department</a>
    <table class="table table-hover ">
        <tr>
            <th>SL</th>
            <th>Department Name</th>
            <th>Department Short Name</th>
            <th>Action</th>
        </tr>
        @foreach($departments as $dept)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $dept->department_name }}</th>
                <th>{{ $dept->department_short_name }}</th>
                <th>
                    <a href="{{ url('/edit-department/'.$dept->id) }}">Edit</a>|
                    <a href="{{ url('/delete-department/'.$dept->id) }}">Delete</a>
                </th>
            </tr>
        @endforeach
    </table>
@endsection

