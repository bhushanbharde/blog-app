@extends('layouts.guest')

@section('content')

<form method="POST">

    @csrf

    <input type="email" name="email">

    <input type="password" name="password">

    <button>Login</button>

</form>

@endsection