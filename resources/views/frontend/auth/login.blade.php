@extends('layouts.guest')

@section('content')
    <form method="POST">

        @csrf

        <input type="email" name="email">

        <input type="password" name="password">

        <div class="mt-8">
            <x-forms.button name="Login" type="info" />
        </div>

    </form>
@endsection
