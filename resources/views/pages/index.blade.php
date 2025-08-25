@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.index.main')
    @include('partials.index.about')
    @include('partials.index.services')
@endsection
