@extends('layouts.app')

@section('content')
    @include('pages.header')
    @include('pages.about')
    @include('pages.why')
    @include('pages.majors')
    @include('pages.courses')
    {{-- @include('pages.footer') --}}
    @include('pages.comment')
@endsection
