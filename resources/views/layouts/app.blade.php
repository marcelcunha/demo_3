@extends('layouts.base')

@section('body')
@include('dashboard.navbar')

<div class="h-screen flex flex-row flex-wrap">

    @include('dashboard.sidebar')

    <div class="bg-gray-100 flex-1 p-6 md:mt-16">

        @yield('content')

        @isset($slot)
        {{ $slot }}
        @endisset

    </div>

</div>

@endsection
