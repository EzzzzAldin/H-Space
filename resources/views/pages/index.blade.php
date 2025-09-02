@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="mainBackground position-relative">
        <img class="h-100 position-absolute w-100 z-0" src="{{ asset('assets/imgs/Homebghgfh.png') }}" alt="" style="top: 10rem;">
        <div class="position-relative z-1">
            @include('partials.index.main')
            @include('partials.index.about')
            @include('partials.index.services')
            @include('partials.index.customers')
            @include('partials.index.projects')
            @include('partials.index.team')
            @include('partials.index.contactus')
        </div>
    </div>


@endsection
