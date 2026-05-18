@extends('layouts.app')

@section('content')

<div class="flex w-full pb-20">

    @include('components.sidemenu')

    <div class="w-10/12 px-10 ml-[20%]">
        @yield('dashboard-content')
    </div>

</div>

@endsection