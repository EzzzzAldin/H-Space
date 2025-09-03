@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="mainBackground position-relative">
        <img class="h-100 position-absolute w-100 z-0" src="{{ asset('assets/imgs/Homebghgfh.png') }}" alt=""
            style="top: 10rem; object-fit: cover;">
        <div class="position-relative z-1">
            @include('livewire.projects')
        </div>
    </div>
@endsection
