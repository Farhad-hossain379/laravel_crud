@extends('layout')
@section('content')
    <br/><br/>
    <form action="usercontroller" method="post">
        @csrf
        UserName
        <input type="text" name="user_name" required>
        <br/>
        E-mail
        <input type="text" name="email" required>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
@endsection

