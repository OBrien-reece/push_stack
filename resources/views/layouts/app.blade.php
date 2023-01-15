{{--Extend the Master layout--}}
@extends('layouts.master')


{{--Using prepend so that these GLOBAL styles can get loaded first before all the other things in a stack--}}
@prepend('styles')
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
@endprepend


@section('app')
    @include('partials.app.header')
    @include('partials.app.main')
@endsection


{{--Using prepend so that these GLOBAL scripts can get loaded first before all the other things in a stack--}}
@prepend('scripts')
    @vite(['resources/js/app.js'])
@endprepend
